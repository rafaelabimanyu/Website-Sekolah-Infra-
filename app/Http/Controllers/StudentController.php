<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // ================== INDEX ==================
    public function index()
    {
        $students = Student::orderBy('id', 'asc')->paginate(10);
        return view('backoffice.student.list_student', compact('students'));
    }

    // ================== CREATE ==================
    public function create()
    {
        return view('backoffice.student.create');
    }

    // ================== STORE ==================
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required|string|max:255',
            'kelas'         => 'required|string|max:50',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'status'        => 'required|in:Active,Graduated',
        ]);

        Student::create($request->all());

        return redirect()->route('student.index')
                         ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    // ================== EDIT ==================
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('backoffice.student.edit', compact('student'));
    }

    // ================== UPDATE ==================
public function update(Request $request, $id)
{
    $request->validate([
        'nama'          => 'required|string|max:255',
        'kelas'         => 'required|string|max:50',
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
        'status'        => 'required|in:Active,Graduated',
    ]);

    $student = Student::findOrFail($id);
    $student->update($request->all());

    // Kalau AJAX request → return JSON
    if ($request->ajax()) {
        return response()->json(['success' => true, 'student' => $student]);
    }

    // Kalau request biasa → redirect
    return redirect()->route('student.index')
                     ->with('success', 'Data siswa berhasil diperbarui.');
}


    // ================== DESTROY ==================
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index')
                         ->with('success', 'Data siswa berhasil dihapus.');
    }
}
