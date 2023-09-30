<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company_structure;

class CompanyStructureController extends Controller
{
    public function index(){
        $data_company_structures = Company_structure::with('Admin')->get();
        return view('admin.company_structures', compact('data_company_structures'));
    }
}
