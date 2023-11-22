<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/npm.php';
require 'contrib/rsync.php';

///////////////////////////////////
// Config
///////////////////////////////////

set('application', 'Kaha Web');
set('repository', 'git@github.com:agungkes/kaha-web.git'); // Git Repository
set('ssh_multiplexing', true);  // Speed up deployment
set('http_user', 'kahasolu');
set('writable_mode', 'chmod');
set('keep_releases', 3);
// set('writable_mode', 'chmod');
//set('default_timeout', 1000);

set('rsync_src', function () {
    return __DIR__; // If your project isn't in the root, you'll need to change this.
});

add('rsync', [
    'exclude' => [
        '.git',
        // '/vendor/',
        // '/node_modules/',
        '.github',
        'deploy.php',
    ],
]);

// add('shared_files', ['.env']);
add('shared_files', []);
add('shared_dirs', []);

// Set up a deployer task to copy secrets to the server.
// Grabs the dotenv file from the github secret
// task('deploy:secrets', function () {
//     file_put_contents(__DIR__ . '/.env', getenv('DOT_ENV'));
//     upload('.env', get('deploy_path') . '/shared');
// });

///////////////////////////////////
// Hosts
///////////////////////////////////

host('staging')
    ->setSshArguments(['-o StrictHostKeyChecking=no'])
    ->setHostname('kaha-solusi.com')
    ->setPort(64000)
    ->set('remote_user', 'kahasolu')
    ->set('branch', 'development')
    ->set('deploy_path', '/home/kahasolu/public_html');

after('deploy:failed', 'deploy:unlock');  // Unlock after failed deploy
after('deploy:info', 'deploy:unlock');  // Unlock after failed deploy

///////////////////////////////////
// Tasks
///////////////////////////////////

desc('Start of Deploy the application');

task('deploy', [
    'deploy:prepare',
    'rsync',                // Deploy code & built assets
    // 'deploy:secrets',       // Deploy secrets
    'deploy:vendors',
    'deploy:shared',        //
    'artisan:storage:link', //
    'artisan:view:cache',   //
    'artisan:config:cache', // Laravel specific steps
    'artisan:migrate',      //
    'artisan:queue:restart', //
    'deploy:publish',       //
]);

desc('End of Deploy the application');
