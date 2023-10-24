<?php

namespace App\Http\Controllers;

use App\Models\Company_structure;
use App\Models\FAQ;
use App\Models\Portfolio;
use App\Models\Role;
use App\Models\Testimonial;
use App\Models\Tool;
use Illuminate\Http\Request;

class DashboardClientController extends Controller
{
    public function index()
    {
        $faqs = FAQ::get();
        $founders = Company_structure::get();
        $portfolios = Portfolio::get();
        $roles = Role::get();
        $testimonials = Testimonial::get();
        $tools = Tool::get();
        return view('dashboard', compact('faqs', 'founders', 'portfolios', 'roles', 'testimonials', 'tools'));
    }
}
