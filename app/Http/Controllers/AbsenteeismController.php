<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Absenteeism;
use Illuminate\Http\Request;

class AbsenteeismController extends Controller
{
    public function index()  {
        
        return view('absenteeism');
    }
    
    
    public function addAbsen(Request $request) {
        // Mendapatkan data absensi pengguna untuk hari ini
        $user = auth()->user();
        $today = Carbon::today();
        $existingAbsen = Absenteeism::where('user_id', $user->id)
                                      ->whereDate('created_at', $today)
                                      ->first();
    
        // Jika pengguna sudah mengisi absensi hari ini, kembalikan dengan pesan error
        if ($existingAbsen) {
            return redirect("absenteeism")->with('error', 'Anda sudah mengisi absensi hari ini!');
        }
    
        // Validasi input
        $validated = $request->validate([
            'attendance_status' => 'nullable|string', // tidak wajib diisi
            'information' => 'nullable|string'
        ]);
    
        // Jika attendance_status tidak diisi, set sebagai "alpha"
        if (!$validated['attendance_status']) {
            $validated['attendance_status'] = 'alpha';
            $validated['information'] = 'Tidak ada izin'; // Jika alpha, informasinya tidak ada izin
        }
    
        // Membuat objek Absen baru
        $absen = new Absenteeism();
        $absen->attendance_status = $validated['attendance_status'];
        $absen->information = $validated['information'];
        $absen->user_id = $user->id; 
        
        // Simpan objek ke database
        $absen->save();
    
        // Redirect dengan pesan sukses
        return redirect("absenteeism")->with('success', 'Absen berhasil ditambahkan!');
    }
    
    public function listAbsenteeism()  {
        $absen = Absenteeism::with('user')->get();
        return view('listAbsenteeism',['absen' => $absen]);
    }

}
