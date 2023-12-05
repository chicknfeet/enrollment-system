<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    function __construct(){
        $this->enrollments = new Enrollment;
    }

    function index(){
        return view('enrollment')->with(['enrollments'=>Enrollment::all()]);
    }

    function save_enrollments(Request $request){
        $data = [
            'Name' => $request->Name,
            'Address' => $request->Address,
            'Subject1' => $request->Subject1,
            'Subject2' => $request->Subject2,
            'Subject3' => $request->Subject3,
            'Subject4' => $request->Subject4,
            'Subject5' => $request->Subject5,
        ];
        $this->enrollments->saveEnrollments($data);
        return back();
    }

    function delete_enrollments($id){
        $this->enrollments->deleteEnrollments($id);
        return back();
    }

    function update_enrollments($id){
        $enrollments = $this->enrollments->updateEnrollments($id);
        return view('update_enrollments', compact('enrollments'));
    }

    function save_updated_enrollments(Request $request){
        $data = [
            'Name' => $request->update_enrollment_name,
            'Address' => $request->update_address,
            'Subject1' => $request->update_subject1,
            'Subject2' => $request->update_subject2,
            'Subject3' => $request->update_subject3,
            'Subject4' => $request->update_subject4,
            'Subject5' => $request->update_subject5,
        ];
        $this->enrollments->updatedEnrollments($data, $request->id);
        return redirect()->route('enrollment');
    }
}
