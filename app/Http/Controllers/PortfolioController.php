<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    /**
     * Menampilkan halaman utama portfolio.
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $portfolios = Portfolio::paginate(6);
            $showButton = true; // true karena portfolio dapat ditambah sampai tak terhingga
            return view('admin.portfolios.index', compact('portfolios', 'showButton'));
        }
    }

    /**
     * Menampilkan Halaman Create Portfolios.
     */
    public function create()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.portfolios.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $validated = $request->validate([
                'portfolio_title' => 'required|string|max:250',
                'portfolio_desc' => 'required|string|max:250',
                'portfolio_image_url' => 'required|image|mimes:jpeg,jpg,png|max:2048'
            ]);
            dd($request->all());
        }
        
    }

    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Menampilkan halaman edit data portfolios.
     */
    public function edit(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
