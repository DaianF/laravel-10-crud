<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;


class StudentController extends Controller
{
    public function index() : View
    {
        return view('student.index', [
            'student' => Student::latest()->paginate(3)
        ]);
    }

    public function create() : View
    {
        return view('student.create');
    }    

    public function store(StoreStudentRequest $request) : RedirectResponse
    {
        Student::create($request->all());
        return redirect()->route('student.index')
            ->withSuccess('New product is added successfully.');
    }    

    public function show(Student $student) : View
    {
        return view('student.show', [
            'student' => $student
        ]);
    }    

    public function edit(Student $student) : View
    {
        return view('student.edit', [
            'student' => $student
        ]);
    }   

    public function update(UpdateStudentRequest $request, Student $product) : RedirectResponse
    {
        $product->update($request->all());
        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }    

    public function destroy(Student $student) : RedirectResponse
    {
        $student->delete();
        return redirect()->route('student.index')
                ->withSuccess('Product is deleted successfully.');
    }
}
