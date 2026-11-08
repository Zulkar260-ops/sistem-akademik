<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'dokumen' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ], [
            'dokumen.required' => 'Silakan pilih dokumen terlebih dahulu.',
            'dokumen.mimes' => 'Format dokumen harus PDF, DOC, atau DOCX.',
            'dokumen.max' => 'Ukuran dokumen maksimal 5 MB.',
        ]);

        $request->file('dokumen')->store('dokumen', 'public');

        return redirect('/dokumen')
            ->with('success', 'Dokumen berhasil diunggah.');
    }
}