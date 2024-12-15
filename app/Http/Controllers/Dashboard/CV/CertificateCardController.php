<?php

namespace App\Http\Controllers\Dashboard\CV;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\CV\CertificateCard;

use Illuminate\Http\Request;

class CertificateCardController extends Controller
{
    public function index()
    {
        $certificates = CertificateCard::all();
        return view('admin.pages.dashboard.cv.certificate.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.pages.dashboard.cv.certificate.create-edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'certificate_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'field' => 'required|string|max:255',
        ]);

        CertificateCard::create($request->all());
        return redirect()->route('dashboard.cv.certificates')->with('success', 'Sertifika başarıyla eklendi.');
    }

    public function edit($id)
    {
        $certificate = CertificateCard::findOrFail($id);
        return view('admin.pages.dashboard.cv.certificate.create-edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'certificate_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'field' => 'required|string|max:255',
        ]);

        $certificate = CertificateCard::findOrFail($id);
        $certificate->update($request->all());
        return redirect()->route('dashboard.cv.certificates')->with('success', 'Sertifika başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $certificate = CertificateCard::findOrFail($id);
        $certificate->delete();
        return redirect()->route('dashboard.cv.certificates')->with('success', 'Sertifika başarıyla silindi.');
    }
}
