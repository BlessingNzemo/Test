<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return response()->json(['students' => $students]);
    }

    public function search(Request $request)
    {
        $query = request()->input('query');
        $students = Student::where('firstname', 'like', "%$query%")->latest()->paginate(10);
        return response()->json(['students' => $students]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => "required| string| max:50| min:5",
            'lastname' => "required| string| max:50| min:5",
            'middlename' => "required| string| max:50| min:5",
            'age' => "required| integer",
        ]);

        Student::create([
            'firstname' => $request->firstname,
            'lastname' =>  $request->firstname,
            'middlename' => $request->middlename,
            'age' =>  $request->age
        ]);

        return response()->json(['success' => 'Création reussie']);
    }

    public function show(Student $student)
    {
        return response()->json(['student' => $student]);
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'firstname' => "required| string| max:50| min:5",
            'lastname' => "required| string| max:50| min:5",
            'middlename' => "required| string| max:50| min:5",
            'age' => "required| integer",
        ]);

        $student->update([
            'firstname' => $request->firstname,
            'lastname' =>  $request->firstname,
            'middlename' => $request->middlename,
            'age' =>  $request->age
        ]);
        return response()->json(['success' => 'Mise à jour éffectuée']);
    }
}
