<?php

namespace App\Http\Controllers;

use App\Models\Absenteeism;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()  {
        $detail = Auth::user();
        $absen = Absenteeism::where('user_id', $detail->id)->with('user')->get();
        return view('profile',['detail'=>$detail,"absen" =>$absen]);
    }
    public function listArticleUser()  {
        $detail = Auth::user();
        $articles = Article::where('user_id', $detail->id)->with('user')->get();
        return view('listArticleUser',['detail'=>$detail,'articles'=>$articles]);
    }
    public function editProfile()  {
        $detail = Auth::user();
        return view('edit-profile',['detail'=>$detail]);
    }
    public function updateProfile(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|max:255',
            'age' => 'required',
            'phone' => 'required|max:15',
            'addres' => 'required|max:255',
        ]);

        // Get the authenticated user
        $user = Auth::user();
        $user->update($request->only('username', 'age', 'phone', 'addres'));

        // Redirect back with a success message
        return redirect('profile')->with('success', 'Profile updated successfully!');
    }
}
