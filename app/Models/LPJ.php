<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\NullableType;

class LPJ extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'isi',
        'deskripsi',
        'user_up',
        'user_id',
        'user_app',
        'status'
    ];
    protected $nullable = [
        'user_app'
    ];
}
