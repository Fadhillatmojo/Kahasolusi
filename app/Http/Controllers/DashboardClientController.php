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
        $faqs = FAQ::paginate(6);
        $founders = Company_structure::paginate(4);
        $portfolios = Portfolio::paginate(6);
        $roles = Role::paginate(8);
        $testimonials = Testimonial::get();
        $tools = Tool::get();
        return view('dashboard', compact('faqs', 'founders', 'portfolios', 'roles', 'testimonials', 'tools'));
    }
    public function seeMorePortfolio(){
        $portfolios = Portfolio::paginate(9);
        return view('client.see-more-portfolio', compact('portfolios'));
    }
}
