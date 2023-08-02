<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioBlog extends Model
{
    use HasFactory;

    protected $table = "formulario_blog";

    protected $fillable = [
        'title',
        'description',
    ];
}
