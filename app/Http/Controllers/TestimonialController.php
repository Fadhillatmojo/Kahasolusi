<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Menampilkan Halaman index dari Testimonial.
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $count = Testimonial::count();
            $testimonials = Testimonial::paginate(6);
            $showButton = $count <= 3;

            return view('admin.testimonials.index', compact('testimonials', 'showButton'));
        }
    }

    /**
     * Menampilkan form create data testimonial.
     */
    public function create()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.testimonials.create');
        }
    }

    /**
     * Store data testimonial ke database.
     */
    public function store(Request $request)
    {
        if (Auth::guard('admin')->check()) { // check apakah sudah login atau belom
            $request->validate([
                'testimonial_client' => 'required|string|max:30',
                'testimonial_desc' => 'required|string|max:100',
                'testimonial_image_url' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            ]);

            // ini untuk mendapatkan original filename
            $originalFileName = $request->file('testimonial_image_url')->getClientOriginalName();
            $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
            // ini untuk mendapatkan extension originalnya
            $originalExtension = $request->file('testimonial_image_url')->getClientOriginalExtension();
            // ini adalah nama file yang akan disimpan ke database
            $savedFileName = $filename.'_'.time().'.'.$originalExtension;
            // ini adalah path tempat menaruh foto di dalam foldernya di laravel
            $path = storage_path('app/public/testimonials/'.$savedFileName);
            $photoResized = Image::make($request->file('testimonial_image_url'));
            $photoResized->fit(150, 150)->save($path);
            // ini untuk create datanya
            Testimonial::create([
                'testimonial_client' => $request->testimonial_client,
                'testimonial_desc' => $request->testimonial_desc,
                'testimonial_image_url' => $savedFileName,
                'admin_id' => Auth::guard('admin')->id(),
            ]);

            return redirect()->route('testimonials.create')->with(['message' => 'Testimonial Berhasil Ditambahkan!']);
        }
    }

    /**
     * Menampilkan form data edit testimonial.
     */
    public function edit(string $id)
    {
        if (Auth::guard('admin')->check()) {
            $testimonial = Testimonial::findOrFail($id);

            return view('admin.testimonials.edit', compact('testimonial'));
        }
    }

    /**
     * Mengupdate data di database dan juga data photo di table laravel.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'testimonial_client' => 'required|string|max:30',
            'testimonial_desc' => 'required|string|max:100',
            'testimonial_image_url' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // mengambil data testimonial
        $testimonial = Testimonial::findOrFail($id);

        // percabangan untuk mengecek apakah di request itu punya image atau tidak
        if ($request->hasFile('testimonial_image_url')) {
            // ini untuk mendapatkan original filename
            $originalFileName = $request->file('testimonial_image_url')->getClientOriginalName();
            $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
            // ini untuk mendapatkan extension originalnya
            $originalExtension = $request->file('testimonial_image_url')->getClientOriginalExtension();
            // ini adalah nama file yang akan disimpan ke database
            $savedFileName = $filename.'_'.time().'.'.$originalExtension;
            // ini adalah path tempat menaruh foto di dalam foldernya di laravel
            $path = storage_path('app/public/testimonials/'.$savedFileName);
            $photoResized = Image::make($request->file('testimonial_image_url'));
            $photoResized->fit(150, 150)->save($path);

            // Menghapus data image
            $imagePath = 'public/testimonials/'.$testimonial->testimonial_image_url;
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }

            // ini untuk mengupdate datanya
            $testimonial->update([
                'testimonial_client' => $request->testimonial_client,
                'testimonial_desc' => $request->testimonial_desc,
                'testimonial_image_url' => $savedFileName,
            ]);
        } else {
            $testimonial->update([
                'testimonial_client' => $request->testimonial_client,
                'testimonial_desc' => $request->testimonial_desc,
            ]);
        }

        //redirect to new edit form
        return redirect()->route('testimonials.edit', $testimonial->testimonial_id)->with(['message' => 'testimonial Berhasil Diubah!']);
    }

    /**
     * Hapus data testimonial.
     */
    public function destroy(string $id)
    {
        if (Auth::guard('admin')->check()) {
            // testimonial objek
            $testimonial = Testimonial::findOrFail($id);
            // image path
            $imagePath = 'public/testimonials/'.$testimonial->testimonial_image_url;

            // check if image exist
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }

            $testimonial->delete();

            return redirect()->route('testimonials.index')->with(['message' => 'Data Berhasil Dihapus!']);
        }
    }
}
