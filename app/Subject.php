<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $fillable = [
        'name',
        'mark',
        'student_id',
        'grade',
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
