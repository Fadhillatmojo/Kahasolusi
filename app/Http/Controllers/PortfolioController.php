<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Menampilkan halaman utama portfolio.
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(6);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Menampilkan Halaman Create Portfolios.
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
