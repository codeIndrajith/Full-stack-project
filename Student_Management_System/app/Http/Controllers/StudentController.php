<?php

namespace App\Http\Controllers;

use domain\Facades\StudentFacades;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    protected $task;

    //construct
    public function index()
    {
        return Inertia::render('Student/index');
    }

    //store student
    public function store(Request $request)
    {
        return StudentFacades::store($request->all());
    }

    //get student
    public function list()
    {
        $students = StudentFacades::all();
        return response()->json($students);
    }

    //get student details
    public function get($student_id)
    {
        $student =  StudentFacades::get($student_id);
        return response()->json($student);
    }

    //student delete
    public function delete($student_id)
    {
        return  StudentFacades::delete($student_id);
    }

    //change student status
    public function status($status_id)
    {
        return StudentFacades::status($status_id);
    }

    //student edit
    public function edit(Request $request)
    {
        $student =  StudentFacades::get($request);
        return response()->json($student);
    }

    //student update
    public function update(Request $request, $student_id)
    {
        return StudentFacades::update($request->all(), $student_id);
    }
}
