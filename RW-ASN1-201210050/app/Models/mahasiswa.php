<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'data_mahasiswa';

    protected $fillable = ['nim','nama_mahasiswa','alamat_mahasiswa'];
    public $timestamp = false;
}