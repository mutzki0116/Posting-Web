<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bago extends Model
{
    use SoftDeletes;
    protected $table = 'new_tbl';
    protected $fillables = ['newname', 'newbday'];
    
}
