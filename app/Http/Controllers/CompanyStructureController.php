<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company_structure;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CompanyStructureController extends Controller
{
    /**
     * Menampilkan halaman utama founders.
     */
    public function index(){
        if (Auth::guard('admin')->check()) {
            $founders = Company_structure::orderBy('created_at', 'DESC')->paginate(5);
            $showButton = true;
            return view('admin.company_structures.index', compact('founders', 'showButton'));
        }
    }

    /**
     * Menampilkan Halaman Create founders.
     */
    public function create()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.company_structures.create');
        }
    }

    /**
     * Store founder baru ke database.
     */
    public function store(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $request->validate([
                'person_name'      => 'required|string|max:50',
                'person_position'  => 'required|string|max:50',
                'person_image_url' => 'required|image|mimes:jpeg,jpg,png|max:2048'
            ]);

            // ini untuk mendapatkan original filename
            $originalFileName = $request->file('person_image_url')->getClientOriginalName();
            $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
            // ini untuk mendapatkan extension originalnya
            $originalExtension = $request->file('person_image_url')->getClientOriginalExtension();
            // ini adalah nama file yang akan disimpan ke database
            $savedFileName = $filename . '_' . time() . '.' . $originalExtension;
            // ini adalah path tempat menaruh foto di dalam foldernya di laravel
            $path = storage_path('app/public/founders/' . $savedFileName);
            $photoResized = Image::make($request->file('person_image_url'));
            $photoResized->fit(250,250)->save($path);
            // ini untuk create datanya
            Company_structure::create([
                'person_name'       => $request->person_name,
                'person_position'   => $request->person_position,
                'person_image_url'  => $savedFileName,
                'admin_id'          => Auth::guard('admin')->id(),
            ]);

            return redirect()->route('founders.create')->with(['message'   =>  'Founder Berhasil Ditambahkan!']);
        }
    }

    /**
     * Menampilkan halaman edit data founder.
     */
    public function edit(string $id)
    {
        if (Auth::guard('admin')->check()) {
            $founder = Company_structure::findOrFail($id);
            return view('admin.company_structures.edit', compact('founder'));
        }
    }

    /**
     * Function Update data founder.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::guard('admin')->check()) {
            $request->validate([
                'person_name'      => 'required|string|max:50',
                'person_position'  => 'required|string|max:50',
                'person_image_url' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
            ]);
            $founder = Company_structure::findOrFail($id);
    
            // percabangan untuk mengecek apakah di request itu punya image atau tidak
            if ($request->hasFile('person_image_url')){
                // ini untuk mendapatkan original filename
                $originalFileName = $request->file('person_image_url')->getClientOriginalName();
                $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
                // ini untuk mendapatkan extension originalnya
                $originalExtension = $request->file('person_image_url')->getClientOriginalExtension();
                // ini adalah nama file yang akan disimpan ke database
                $savedFileName = $filename . '_' . time() . '.' . $originalExtension;
                // ini adalah path tempat menaruh foto di dalam foldernya di laravel
                $path = storage_path('app/public/founders/' . $savedFileName);
                $photoResized = Image::make($request->file('person_image_url'));
                $photoResized->fit(150,150)->save($path);

                // Menghapus data image
                $imagePath = 'public/founders/'.$founder->person_image_url;
                if (Storage::exists($imagePath)) {
                    Storage::delete($imagePath);
                }
                // ini untuk mengupdate datanya
                $founder->update([
                    'person_name'       => $request->person_name,
                    'person_position'   => $request->person_position,
                    'person_image_url'  => $savedFileName,
                ]);
            } else {
                $founder->update([
                    'person_name'       => $request->person_name,
                    'person_position'   => $request->person_position,
                ]);
            }
            //redirect to new edit form
            return redirect()->route('founders.edit', $founder->person_id)->with(['message' => 'Founder Berhasil Diubah!']);
        }
    }

    /**
     * Function hapus data founder.
     */
    public function destroy(string $id)
    {
        if (Auth::guard('admin')->check()) {
            // founder objek
            $founder = Company_structure::findOrFail($id);
            // image path
            $imagePath = 'public/founders/' . $founder->person_image_url;
    
            // check if image exist
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
    
            $founder->delete();
    
            return redirect()->route('founders.index')->with(['message' => 'Data Berhasil Dihapus!']);
        }
    }
}
