<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absenteeism extends Model
{
    use HasFactory;
    protected $fillable = ['attendance_status', 'information'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
