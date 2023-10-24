<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pegawai extends Model
{
    use HasFactory;

    public $table = "tb_pegawai";
    protected $fillable = ['nama_pegawai'];
    public $timestamps = false;
}
