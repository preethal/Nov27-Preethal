<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'status'
    ];

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }

}
