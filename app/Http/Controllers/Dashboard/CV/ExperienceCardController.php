<?php

namespace App\Http\Controllers\Dashboard\CV;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\CV\ExperienceCard;
use Illuminate\Http\Request;


class ExperienceCardController extends Controller
{
    //
    public function index()
    {
        $experiences = ExperienceCard::all();
        return view('admin.pages.dashboard.cv.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.pages.dashboard.cv.experience.create-edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'department' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);

        ExperienceCard::create($request->all());
        return redirect()->route('dashboard.cv.experiences')->with('success', 'Çalışma deneyimi başarıyla eklendi.');
    }

    public function edit($id)
    {
        $experience = ExperienceCard::findOrFail($id);
        return view('admin.pages.dashboard.cv.experience.create-edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'department' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);

        $experience = ExperienceCard::findOrFail($id);
        $experience->update($request->all());

        return redirect()->route('dashboard.cv.experiences')->with('success', 'Çalışma deneyimi başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $experience = ExperienceCard::findOrFail($id);
        $experience->delete();

        return redirect()->route('dashboard.cv.experiences')->with('success', 'Çalışma deneyimi başarıyla silindi.');
    }
}
