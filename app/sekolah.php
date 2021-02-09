<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jahondust\ModelLog\Traits\ModelLogging;

class formulir extends Model
{
    protected $table = 'sekolah';
    protected $fillable = 'idsekolah';
    use ModelLogging;
}
