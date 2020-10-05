<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogheader extends Model{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'blog_header';
}
