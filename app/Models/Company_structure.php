<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_structure extends Model
{
    use HasFactory;
    protected $primaryKey = 'person_id';
    protected $fillable = [
        'person_position',
        'person_image_url',
        'admin_id'
    ];
    public function Admin(){
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }

}
