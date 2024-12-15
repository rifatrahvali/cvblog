<?php

namespace App\Http\Controllers\Dashboard\CV;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\CV\CourseCard;

use Illuminate\Http\Request;

class CourseCardController extends Controller
{
    public function index()
    {
        // Fetch all courses from the database
        $courses = CourseCard::all();

        // Pass courses to the view
        return view('admin.pages.dashboard.cv.course.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.pages.dashboard.cv.course.create-edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'additional_achievements' => 'required|string|max:255',
        ]);

        // JSON formatına çevirme
        CourseCard::create([
            'course_name' => $request->course_name,
            'institution' => $request->institution,
            'additional_achievements' => json_encode(explode(',', $request->additional_achievements)), // Virgülle ayrılan değerleri JSON yap
        ]);

        return redirect()->route('dashboard.cv.courses')->with('success', 'Kurs başarıyla eklendi.');
    }

    public function edit($id)
    {
        $course = CourseCard::findOrFail($id);
        return view('admin.pages.dashboard.cv.course.create-edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'additional_achievements' => 'required|string|max:255',
        ]);

        $courseCard = CourseCard::findOrFail($id);

        // JSON formatına çevirme
        $courseCard->update([
            'course_name' => $request->course_name,
            'institution' => $request->institution,
            'additional_achievements' => json_encode(explode(',', $request->additional_achievements)), // Virgülle ayrılmış veriyi JSON yap
        ]);
        return redirect()->route('dashboard.cv.courses')->with('success', 'Kurs başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $courseCard = CourseCard::findOrFail($id);
        $courseCard->delete();
        return redirect()->route('dashboard.cv.courses')->with('success', 'Kurs başarıyla silindi.');
    }
}
