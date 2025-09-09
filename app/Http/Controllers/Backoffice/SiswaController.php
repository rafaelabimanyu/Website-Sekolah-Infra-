<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Student;

class SiswaController extends Controller
{
    public function index()
    {
        // Ambil semua data siswa dari DB
        $students = Student::all();

        // Kirim ke view
        return view('backoffice.siswa.index', compact('students'));
    }
}
