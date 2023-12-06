<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    /**
     * Menampilkan halaman utama portfolios.
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $portfolios = Portfolio::orderBy('updated_at', 'DESC')->paginate(6);
            $showButton = true; // true karena portfolio dapat ditambah sampai tak terhingga

            return view('admin.portfolios.index', compact('portfolios', 'showButton'));
        }
    }

    /**
     * Menampilkan Halaman Create Portfolio.
     */
    public function create()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.portfolios.create');
        }
    }

    /**
     * Store portfolio baru ke database.
     */
    public function store(Request $request)
    {
        if (Auth::guard('admin')->check()) { // check apakah sudah login atau belom
            $request->validate([
                'portfolio_title' => 'required|string|max:100',
                'portfolio_desc' => 'required|string|max:254',
                'portfolio_year' => 'required|integer|digits:4|between:1900,2120',
                'portfolio_url' => 'nullable|string|max:225',
                'portfolio_image_url' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            ]);
            if ($request->portfolio_url == null) { // ini percabangan apabila tidak diisi URL nya
                // ini untuk mendapatkan original filename
                $originalFileName = $request->file('portfolio_image_url')->getClientOriginalName();
                $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
                // ini untuk mendapatkan extension originalnya
                $originalExtension = $request->file('portfolio_image_url')->getClientOriginalExtension();
                // ini adalah nama file yang akan disimpan ke database
                $savedFileName = $filename.'_'.time().'.'.$originalExtension;
                // ini adalah path tempat menaruh foto di dalam foldernya di laravel
                $path = storage_path('app/public/portfolios/'.$savedFileName);
                $photoResized = Image::make($request->file('portfolio_image_url'));
                $photoResized->fit(400, 300)->save($path);
                // ini untuk create datanya
                Portfolio::create([
                    'portfolio_title' => $request->portfolio_title,
                    'portfolio_desc' => $request->portfolio_desc,
                    'portfolio_year' => $request->portfolio_year,
                    'portfolio_image_url' => $savedFileName,
                    'admin_id' => Auth::guard('admin')->id(),
                ]);

            } else { // ini untuk percabangan apabila diisi URL nya
                // ini untuk mendapatkan original filename
                $originalFileName = $request->file('portfolio_image_url')->getClientOriginalName();
                $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
                // ini untuk mendapatkan extension originalnya
                $originalExtension = $request->file('portfolio_image_url')->getClientOriginalExtension();
                // ini adalah nama file yang akan disimpan ke database
                $savedFileName = $filename.'_'.time().'.'.$originalExtension;
                // ini adalah path tempat menaruh foto di dalam foldernya di laravel
                $path = storage_path('app/public/portfolios/'.$savedFileName);
                // ini adalah
                $photoResized = Image::make($request->file('portfolio_image_url'));
                $photoResized->fit(400, 300)->save($path);

                // ini untuk create datanya
                Portfolio::create([
                    'portfolio_title' => $request->portfolio_title,
                    'portfolio_desc' => $request->portfolio_desc,
                    'portfolio_year' => $request->portfolio_year,
                    'portfolio_url' => $request->portfolio_url,
                    'portfolio_image_url' => $savedFileName,
                    'admin_id' => Auth::guard('admin')->id(),
                ]);
            }

            return redirect()->route('portfolios.create')->with(['message' => 'Portfolio Berhasil Ditambahkan!']);
        }
    }

    /**
     * Menampilkan halaman edit data portfolio.
     */
    public function edit(string $id)
    {
        if (Auth::guard('admin')->check()) {
            $portfolio = Portfolio::findOrFail($id);

            return view('admin.portfolios.edit', compact('portfolio'));
        }
    }

    /**
     * Function Update data Portfolio.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::guard('admin')->check()) {
            $request->validate([
                'portfolio_title' => 'required|string|max:100',
                'portfolio_desc' => 'required|string|max:254',
                'portfolio_year' => 'required|integer|digits:4|between:1900,2120',
                'portfolio_url' => 'nullable|string|max:225',
                'portfolio_image_url' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            ]);
            $portfolio = Portfolio::findOrFail($id);

            // percabangan apakah requestnya terdapat portfolio url atau tidak
            if ($request->portfolio_url == null) {
                if ($request->hasFile('portfolio_image_url')) {
                    // ini untuk mendapatkan original filename
                    $originalFileName = $request->file('portfolio_image_url')->getClientOriginalName();
                    $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
                    // ini untuk mendapatkan extension originalnya
                    $originalExtension = $request->file('portfolio_image_url')->getClientOriginalExtension();
                    // ini adalah nama file yang akan disimpan ke database
                    $savedFileName = $filename.'_'.time().'.'.$originalExtension;
                    // ini adalah path tempat menaruh foto di dalam foldernya di laravel
                    $path = storage_path('app/public/portfolios/'.$savedFileName);
                    $photoResized = Image::make($request->file('portfolio_image_url'));
                    $photoResized->fit(400, 300)->save($path);

                    Storage::delete('public/portfolios/'.$portfolio->portfolio_image_url);
                    // ini untuk mengupdate datanya
                    $portfolio->update([
                        'portfolio_title' => $request->portfolio_title,
                        'portfolio_desc' => $request->portfolio_desc,
                        'portfolio_year' => $request->portfolio_year,
                        'portfolio_url' => null,
                        'portfolio_image_url' => $savedFileName,
                    ]);
                } else {
                    $portfolio->update([
                        'portfolio_title' => $request->portfolio_title,
                        'portfolio_desc' => $request->portfolio_desc,
                        'portfolio_year' => $request->portfolio_year,
                        'portfolio_url' => null,
                    ]);
                }

                //redirect to new edit form
                return redirect()->route('portfolios.edit', $portfolio->portfolio_id)->with(['message' => 'Portfolio Berhasil Diubah!']);

            } else {
                if ($request->hasFile('portfolio_image_url')) {
                    // ini untuk mendapatkan original filename
                    $originalFileName = $request->file('portfolio_image_url')->getClientOriginalName();
                    $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
                    // ini untuk mendapatkan extension originalnya
                    $originalExtension = $request->file('portfolio_image_url')->getClientOriginalExtension();
                    // ini adalah nama file yang akan disimpan ke database
                    $savedFileName = $filename.'_'.time().'.'.$originalExtension;
                    // ini adalah path tempat menaruh foto di dalam foldernya di laravel
                    $path = storage_path('app/public/portfolios/'.$savedFileName);
                    $photoResized = Image::make($request->file('portfolio_image_url'));
                    $photoResized->fit(400, 300)->save($path);

                    // Menghapus data image
                    $imagePath = 'public/portfolios/'.$portfolio->portfolio_image_url;
                    if (Storage::exists($imagePath)) {
                        Storage::delete($imagePath);
                    }
                    // ini untuk mengupdate datanya
                    $portfolio->update([
                        'portfolio_title' => $request->portfolio_title,
                        'portfolio_desc' => $request->portfolio_desc,
                        'portfolio_year' => $request->portfolio_year,
                        'portfolio_url' => $request->portfolio_url,
                        'portfolio_image_url' => $savedFileName,
                    ]);
                } else {
                    $portfolio->update([
                        'portfolio_title' => $request->portfolio_title,
                        'portfolio_desc' => $request->portfolio_desc,
                        'portfolio_url' => $request->portfolio_url,
                        'portfolio_year' => $request->portfolio_year,
                    ]);
                }

                //redirect to new index table
                return redirect()->route('portfolios.index', $portfolio->portfolio_id)->with(['message' => 'Portfolio Berhasil Diubah!']);
            }
        }
    }

    /**
     * Rute Delete portfolio.
     */
    public function destroy(string $id)
    {
        if (Auth::guard('admin')->check()) {
            // portfolio objek
            $portfolio = Portfolio::findOrFail($id);
            // image path
            $imagePath = 'public/portfolios/'.$portfolio->portfolio_image_url;

            // check if image exist
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }

            $portfolio->delete();

            return redirect()->route('portfolios.index')->with(['message' => 'Data Berhasil Dihapus!']);
        }
    }
}
