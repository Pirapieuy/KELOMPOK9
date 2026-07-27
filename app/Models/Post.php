<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Ngasih tau Laravel: Model ini terhubung ke tabel 'posts' di database
    protected $table = 'posts';

    // Kolom yang boleh diisi lewat form: cuma 'title' dan 'body' aja
    // (biar aman, kolom lain kayak 'id' gak bisa diubah sembarangan)
    protected $fillable = ['title', 'body'];
}
