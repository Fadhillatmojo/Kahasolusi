<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ToolController extends Controller
{
    /**
     * Menampilkan halaman utama tools.
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $tools = Tool::orderBy('created_at', 'DESC')->get();
            $showButton = true;

            return view('admin.tools.index', compact('tools', 'showButton'));
        }
    }

    /**
     * Menampilkan Halaman Create Tool.
     */
    public function create()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.tools.create');
        }
    }

    /**
     * StoStore tool baru ke database
     */
    public function store(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $request->validate([
                'tool_title' => 'required|string|max:10',
                'tool_desc' => 'required|string|max:10',
                'tool_image_url' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            ]);

            // ini untuk mendapatkan original filename
            $originalFileName = $request->file('tool_image_url')->getClientOriginalName();
            $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
            // ini untuk mendapatkan extension originalnya
            $originalExtension = $request->file('tool_image_url')->getClientOriginalExtension();
            // ini adalah nama file yang akan disimpan ke database
            $savedFileName = $filename.'_'.time().'.'.$originalExtension;
            // ini adalah path tempat menaruh foto di dalam foldernya di laravel
            $path = storage_path('app/public/tools/'.$savedFileName);
            $photoResized = Image::make($request->file('tool_image_url'));
            $photoResized->fit(100, 100)->save($path);
            // ini untuk create datanya
            tool::create([
                'tool_title' => $request->tool_title,
                'tool_desc' => $request->tool_desc,
                'tool_image_url' => $savedFileName,
                'admin_id' => Auth::guard('admin')->id(),
            ]);

            return redirect()->route('tools.create')->with(['message' => 'Tool Berhasil Ditambahkan!']);
        }

    }

    /**
     * Menampilkan halaman edit data tool.
     */
    public function edit(string $id)
    {
        if (Auth::guard('admin')->check()) {
            $tool = Tool::findOrFail($id);

            return view('admin.tools.edit', compact('tool'));
        }
    }

    /**
     * Function Update data tool.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::guard('admin')->check()) {
            $request->validate([
                'tool_title' => 'required|string|max:10',
                'tool_desc' => 'required|string|max:10',
                'tool_image_url' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            ]);
            $tool = Tool::findOrFail($id);

            // percabangan untuk mengecek apakah di request itu punya image atau tidak
            if ($request->hasFile('tool_image_url')) {
                // ini untuk mendapatkan original filename
                $originalFileName = $request->file('tool_image_url')->getClientOriginalName();
                $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
                // ini untuk mendapatkan extension originalnya
                $originalExtension = $request->file('tool_image_url')->getClientOriginalExtension();
                // ini adalah nama file yang akan disimpan ke database
                $savedFileName = $filename.'_'.time().'.'.$originalExtension;
                // ini adalah path tempat menaruh foto di dalam foldernya di laravel
                $path = storage_path('app/public/tools/'.$savedFileName);
                $photoResized = Image::make($request->file('tool_image_url'));
                $photoResized->fit(150, 150)->save($path);

                // Menghapus data image
                $imagePath = 'public/tools/'.$tool->tool_image_url;
                if (Storage::exists($imagePath)) {
                    Storage::delete($imagePath);
                }
                // ini untuk mengupdate datanya
                $tool->update([
                    'tool_title' => $request->tool_title,
                    'tool_desc' => $request->tool_desc,
                    'tool_image_url' => $savedFileName,
                ]);
            } else {
                $tool->update([
                    'tool_title' => $request->tool_title,
                    'tool_desc' => $request->tool_desc,
                ]);
            }

            //redirect to new edit form
            return redirect()->route('tools.edit', $tool->tool_id)->with(['message' => 'Tool Berhasil Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Auth::guard('admin')->check()) {
            // tool objek
            $tool = Tool::findOrFail($id);
            // image path
            $imagePath = 'public/tools/'.$tool->tool_image_url;

            // check if image exist
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }

            $tool->delete();

            return redirect()->route('tools.index')->with(['message' => 'Data Berhasil Dihapus!']);
        }
    }
}
