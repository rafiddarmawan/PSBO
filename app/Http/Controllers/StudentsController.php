<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nis = $request->nis;
        // $student->asrama = $request->asrama;

        // $student->save();

        /** Using Mass Assignment from Laravel (cara 1)*/
        // Student::create([
        //     'nama' => $request->nama,
        //     'nis' => $request->nis,
        //     'asrama' => $request->asrama
        // ]);

        /** Validation (using Laravel) */
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|size:10|distinct',
            'asrama' => 'required'
        ]);

        /** Using Mass Assignment from Laravel (cara 2) */
        Student::create($request->all());

        return redirect('/students')->with('status', 'Data Siswa
        Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|size:10|distinct',
            'asrama' => 'required'
        ]);

        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nis' => $request->nis,
                'asrama' => $request->asrama
            ]);

        return redirect('/students')->with('status', 'Data Siswa
        Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        //return $student;
        return redirect('/students')->with('status', 'Data Siswa
        Berhasil Dihapus!');
    }
}
