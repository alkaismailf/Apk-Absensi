<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'tb_absensi';

    protected $fillable = ['nip', 'tgl_absensi', 'hadir', 'sakit', 'izin', 'alpa'];
}
