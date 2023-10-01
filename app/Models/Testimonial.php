<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;
    protected $primaryKey = 'testimonial_id';
    public function Admin(){
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }
}
