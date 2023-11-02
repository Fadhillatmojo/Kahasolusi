<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    protected $primaryKey = 'portfolio_id';
    protected $fillable = [
        'portfolio_title',
        'portfolio_desc',
        'portfolio_url',
        'portfolio_image_url',
        'admin_id',
    ];
    public function Admin(){
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }

}
