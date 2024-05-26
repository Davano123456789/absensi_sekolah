<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()  {
        $teacherCount = User::where('role_id', 3)->count();
        $studentCount = User::where('role_id', 2)->count();
        return view('dashboard',['studentCount' => $studentCount, 'teacherCount' => $teacherCount]);
    }
    public function studentData()  {
        $student = User::where('role_id', 2)->get();
        return view('studentData',['student' => $student]);
    }
    public function teacherData()  {
        $teacher = User::where('role_id', 3)->get();
        return view('teacherData',['teacher' => $teacher]);
    }
    public function detailTeacher($id)  {
        $detail = User::findOrFail($id);
        return view('detailTeacher',['detail' => $detail]);
    }
    public function detailStudent($id)  {
        $detail = User::findOrFail($id);
        return view('detailStudent',['detail' => $detail]);
    }
    public function deleteStudent($id)  {
        
        $detail = User::findOrFail($id);
        return view('deleteStudent',['detail' => $detail]);
    }
    public function deletedStudent($id)  {
        
        $detail = User::findOrFail($id);
        $detail->delete();
        if($detail->role_id == 2){
            return redirect('studentData')->with('success', 'Profile deleted successfully!');
        }else{
            return redirect('teacherData')->with('success', 'Profile deleted successfully!');

        }
    }
    public function showDeleted()  {
        $show = user::onlyTrashed()->get();
        return view('showDeleted',['show'=>$show]);
    }
    public function restoreStudent($id)  {
        $detail = User::withTrashed()->findOrFail($id);
        $detail->restore();
        if($detail->role_id == 2){
            return redirect('studentData')->with('success', 'Profile restore successfully!');
        }else{
            return redirect('teacherData')->with('success', 'Profile restore successfully!');
    
        }
        
    }
       
}
