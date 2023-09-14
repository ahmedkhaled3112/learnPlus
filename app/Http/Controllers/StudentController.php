<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\City;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    public function index(){
        // return "<h1 style='color: red;'>This is the Students List Page</h1>";
        $students = Student::paginate(25);
        return view('students.list')->with(["students" => $students]);
    }

    public function index_trash(){
        $trashed_students = Student::onlyTrashed()->get();
        return view('students.trash')->with(["students" => $trashed_students]);
    }

    public function create(){
        $cities = City::all();
        return view('students.new')->with(["cities" => $cities]);
    }

    public function store(Request $request){
        /****** File Upload ******/
        // request('phone') = $request->input('phone');
        // $img->getClientOriginalName() = $_FILES["image"]["name"];
        // $img->getClientOriginalExtension() = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        // $img->getSize() = $_FILES["image"]["size"]
        // $img->getMimeType() = $_FILES["image"]["type"]
        // Store with a randomly generated name
        // $img->store('public/students/');
        $img = $request->file('image');
        $filename = str_replace(" ", "-", strtolower(request('name')));
        $filename = $filename . "." . $img->getClientOriginalExtension();
        $img->storeAs('public/students/', $filename);
        /****** File Upload ******/
        $student = new Student();
        $student->image = $filename;
        $student->name = request('name');
        $student->phone = request('phone');
        $student->email = request('email');
        $student->address = request('address');
        $student->city_id = request('city_id');
        $student->save();
        return redirect()->route('students.list');
    }

    public function edit($id){
        $student = Student::find($id);
        $cities = City::all();
        return view('students.edit')->with(["student" => $student, "cities" => $cities]);
    }

    public function update(Request $request, $id){
        $stud = Student::find($id);
        $img = $request->file('image');
        if(isset($img) != ""){
            $filename = str_replace(" ", "-", strtolower(request('name')));
            $filename = $filename . "." . $img->getClientOriginalExtension();
            $img->storeAs('public/students/', $filename);
            $stud->image = $filename;
        }
        $stud->name = request('name');
        $stud->phone = request('phone');
        $stud->email = request('email');
        $stud->address = request('address');
        $stud->city_id = request('city_id');
        $stud->save();
        return redirect()->route('students.list');
    }

    public function show($id){
        // return "<h1>Profile for $id</h1>";
        $stud = Student::find($id);
        return view('students.view')->with(["student" => $stud]);
    }

    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        // "UPDATE students SET deleted_at = now() WHERE id = $student->id"
        return redirect()->route('students.list');
    }

    public function restore($id){
        $student = Student::onlyTrashed()->find($id);
        $student->restore();
        // "UPDATE students SET deleted_at = NULL WHERE id = $student->id"
        return redirect()->route('students.trash');
    }

    public function delete_forever($id){
        $student = Student::onlyTrashed()->find($id);
        $student->forceDelete();
        // "DELETE FROM students WHERE id = $student->id"
        return redirect()->route('students.trash');
    }

    public function search_by_phone(){
        // $id = $_GET["id"];
        if(request('phone') != null){
            $phone = request('phone');
            $results = Student::where('phone', $phone)->get();
            return view('students.search-by-phone')->with(["results" => $results]);
        } else {
            return view('students.search-by-phone');
        }
    }

    public function search_by_name(){
        if(request('name') != null){
            $name = request('name');
            $results = Student::withTrashed()->where('name', 'LIKE', "%$name%")->get();
            return view('students.search-by-name')->with(["results" => $results]);
        } else {
            return view('students.search-by-name');
        }
    }

    public function search_by_field(){
        if(request('term') != null){
            $term = request('term');
            $field = request('field');
            $results = Student::where($field, 'LIKE', "%$term%")->get();
            return view('students.search-by-field')->with(["results" => $results]);
        } else {
            return view('students.search-by-field');
        }
    }

    public function search_dynamically(){
        if(request('term') != null){
            $term = request('term');
            $results = Student::where('name', 'LIKE', "%$term%")
                            ->orWhere('phone', 'LIKE', "%$term%")
                            ->orWhere('address', 'LIKE', "%$term%")
                            ->orWhere('birth_date', 'LIKE', "%$term%")
                            ->get();
            return view('students.search-dynamically')->with(["results" => $results]);
        } else {
            return view('students.search-dynamically');
        }
    }
}

