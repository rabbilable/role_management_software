<?php

namespace App;
use App\EmployeeInfo;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    protected $guarded = [];

    public function employeeInfo(){
        return $this->hasMany(EmployeeInfo::class);
    }
}
