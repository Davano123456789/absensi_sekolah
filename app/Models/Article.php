<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover',
        'content',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
