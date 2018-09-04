<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'years';

    protected $fillable = ['value', 'status'];

    public function schoolterms() {
        return $this->hasMany('App\Schoolterm');
    }
    public function classrooms() {
        return $this->hasMany('App\Classroom');
    }
    public function annotations() {
        return $this->hasMany('App\Annotation');
    }
    public function qualifications() {
        return $this->hasMany('App\Qualification');
    }
    public function finalqualifications() {
        return $this->hasMany('App\FinalQualification');
    }
    public function preenrollments() {
        return $this->hasMany('App\Preenrollment');
    }
}
