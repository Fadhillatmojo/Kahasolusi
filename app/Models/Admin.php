<?php

namespace App\Models;

use App\Models\FAQ;
use App\Models\Role;
use App\Models\Tool;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Company_structure;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;


class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'admin_id';
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    // ini bagian relationshipnya
    public function CompanyStructures(){
        return $this->hasMany(Company_structure::class);
    }
    public function FAQ(){
        return $this->hasMany(FAQ::class);
    }
    public function Portfolio(){
        return $this->hasMany(Portfolio::class);
    }
    public function Role(){
        return $this->hasMany(Role::class);
    }
    public function Testimonial(){
        return $this->hasMany(Testimonial::class);
    }
    public function Tool(){
        return $this->hasMany(Tool::class);
    }
}
