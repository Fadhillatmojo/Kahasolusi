<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $count = FAQ::count();
            $faqs = FAQ::orderBy('updated_at', 'DESC')->paginate(6);
            $showButton = $count <= 6;

            return view('admin.faqs.index', compact('faqs', 'showButton'));
        }
    }

    /**
     * Menampilkan form editing FAQ.
     */
    public function edit(string $id)
    {
        if (Auth::guard('admin')->check()) {
            $faq = FAQ::findOrFail($id);

            return view('admin.faqs.edit', compact('faq'));
        }
    }

    /**
     * Mengupdate pertanyaan dan jawaban dari FAQ.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::guard('admin')->check()) {
            $request->validate([
                'faq_title' => 'required|string|max:255',
                'faq_answer' => 'required|string|max:255',
            ]);
            $faq = FAQ::findOrFail($id);
            $faq->update([
                'faq_title' => $request->faq_title,
                'faq_answer' => $request->faq_answer,
            ]);

            //redirect to new index table
            return redirect()->route('faqs.index', $faq->faq_id)->with(['message' => 'FAQ Berhasil Diubah!']);
        }
    }
}
