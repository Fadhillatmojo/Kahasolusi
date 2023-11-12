<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class RoleController extends Controller
{
    /**
     * Menampilkan halaman utama roles.
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $count = Role::count();
            $roles = Role::paginate(8);
            $showButton = $count < 8;
            return view('admin.roles.index', compact('roles', 'showButton'));
        }
    }

    /**
     * Menampilkan Halaman Create Role.
     */
    public function create()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.roles.create');
        }
    }

    /**
     * Store role baru ke database.
     */
    public function store(Request $request)
    {
        if (Auth::guard('admin')->check()) { // check apakah sudah login atau belom
            $request->validate([
                'role_name'       => 'required|string|max:30',
                'role_image_url'  => 'required|image|mimes:jpeg,jpg,png|max:2048'
            ]);

            // ini untuk mendapatkan original filename
            $originalFileName = $request->file('role_image_url')->getClientOriginalName();
            $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
            // ini untuk mendapatkan extension originalnya
            $originalExtension = $request->file('role_image_url')->getClientOriginalExtension();
            // ini adalah nama file yang akan disimpan ke database
            $savedFileName = $filename . '_' . time() . '.' . $originalExtension;
            // ini adalah path tempat menaruh foto di dalam foldernya di laravel
            $path = storage_path('app/public/roles/' . $savedFileName);
            $photoResized = Image::make($request->file('role_image_url'));
            $photoResized->resize(150,150)->save($path);
            // ini untuk create datanya
            Role::create([
                'role_name'       => $request->role_name,
                'role_image_url'  => $savedFileName,
                'admin_id'        => Auth::guard('admin')->id(),
            ]);

            return redirect()->route('roles.create')->with(['message'   =>  'Role Berhasil Ditambahkan!']);
        }
    }

    /**
     * Menampilkan halaman edit data role.
     */
    public function edit(string $id)
    {
        if (Auth::guard('admin')->check()) {
            $role = Role::findOrFail($id);
            return view('admin.roles.edit', compact('role'));
        }
    }

    /**
     * Function Update data Role.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::guard('admin')->check()) {
            $request->validate([
                'role_name'       => 'required|string|max:30',
                'role_image_url'  => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
            ]);
            $role = Role::findOrFail($id);
    
            // percabangan untuk mengecek apakah di request itu punya image atau tidak
            if ($request->hasFile('role_image_url')){
                // ini untuk mendapatkan original filename
                $originalFileName = $request->file('role_image_url')->getClientOriginalName();
                $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
                // ini untuk mendapatkan extension originalnya
                $originalExtension = $request->file('role_image_url')->getClientOriginalExtension();
                // ini adalah nama file yang akan disimpan ke database
                $savedFileName = $filename . '_' . time() . '.' . $originalExtension;
                // ini adalah path tempat menaruh foto di dalam foldernya di laravel
                $path = storage_path('app/public/roles/' . $savedFileName);
                $photoResized = Image::make($request->file('role_image_url'));
                $photoResized->resize(150,150)->save($path);
    
                Storage::delete('public/roles/'.$role->role_image_url);
                // ini untuk mengupdate datanya
                $role->update([
                    'role_name'       => $request->role_name,
                    'role_image_url'  => $savedFileName,
                ]);
            } else {
                $role->update([
                    'role_name'       => $request->role_name,
                ]);
            }
            //redirect to new edit form
            return redirect()->route('roles.edit', $role->role_id)->with(['message' => 'Role Berhasil Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Auth::guard('admin')->check()) {
            // role objek
            $role = Role::findOrFail($id);
            // image path
            $imagePath = 'public/roles/' . $role->role_image_url;
    
            // check if image exist
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
    
            $role->delete();
    
            return redirect()->route('roles.index')->with(['message' => 'Data Berhasil Dihapus!']);
        }
    }
}
