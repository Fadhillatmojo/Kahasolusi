<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Company_structure extends Model
{
    use HasFactory;
    protected $primaryKey = 'person_id';
    public function Admin(){
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }

}
