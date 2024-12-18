<?php

namespace App\Http\Controllers;

use App\Mail\SupportRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SupportRequestController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'budget' => 'nullable|numeric',
        'web_type' => 'required|string',
        'project_description' => 'nullable|string',
        'delivery_date' => 'required|date',
        'example_sites' => 'nullable|string',
        'pages' => 'nullable|string',
        'additional_notes' => 'nullable|string',
        'files.*' => 'nullable|file|mimes:jpeg,png,jpg,pdf,doc,docx|max:2048',
    ]);

    // Dosyaları yüklemek ve dosya yollarını tutmak
    $filePaths = [];
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $filePath = $file->store('support_files', 'public');
            $filePaths[] = $filePath;
        }
    }
    $validated['file_paths'] = $filePaths;

    // Mail gönderimi
    Mail::send('frontend.pages.emails.support', ['formData' => $validated], function ($message) use ($validated, $request) {
        $message->to('rifatrahvali@outlook.com')->subject('Yeni Destek Talebi');

        // Birden fazla dosyayı ekle
        if (!empty($validated['file_paths'])) {
            foreach ($validated['file_paths'] as $filePath) {
                $message->attach(storage_path('app/public/' . $filePath), [
                    'as' => basename($filePath),
                    'mime' => mime_content_type(storage_path('app/public/' . $filePath)),
                ]);
            }
        }
    });

    return back()->with('success', 'Teklif isteğiniz başarıyla gönderildi!');
}


}
