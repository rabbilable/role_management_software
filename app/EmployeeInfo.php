<?php

namespace App;
use App\User;
use App\Designation;
use App\Dept;

use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    protected $guarded = [];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function designation(){
        return $this->belongsTo(Designation::class);
    }

    public function dept(){
        return $this->belongsTo(Dept::class);
    }

    public function reportingTo(){
        return $this->belongsTo(ReportingTo::class);
    }
    // public function users(){
    //    $this->hasOne(User::class);
    // }
    
}
