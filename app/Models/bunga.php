<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bunga extends Model
{
    use HasFactory;
    protected $table = 'bungas';
    protected $fillable = [
        'name',
        'code',
        'type',
        'notes',
        'growth',
    ];
}
