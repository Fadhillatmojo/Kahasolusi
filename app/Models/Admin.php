<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company_structure;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'admin_id';

    public function CompanyStructures(){
        return $this->hasMany(Company_structure::class);
    }
}
