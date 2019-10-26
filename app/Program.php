<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function programcontents()
    {
        return $this->hasMany('\App\ProgramContent');
    }
}
