<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return redirect()->route('students.index')->with('success', 'L\'étudiant a été crée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
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
        return redirect()->route('students.index')->with('success', 'L\'étudiant a été mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
    public function search(Request $request)
    {
        $query = request()->input('query');
        // dd($query);


        $students = Student::where('firstname', 'like', "%$query%")->latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    public function factoriel(int $number)
    {
        $factoriel = 1;
        for ($i = $number; $i = 1; $i--) {
            $factoriel = $factoriel * $i;
        }
        dd($factoriel);
    }

    public function minmax(array $salaire) {}
}
