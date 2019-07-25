<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public static function getEmployees()
    {
        /*$employees = [
            ['name' => 'John', 'company' => 'Roweb'],
            ['name' => 'Ion', 'company' => 'Dacia']
        ];
        return $employees;
        */
    }
    public function company(){

        return $this->belongsTo('App\Company');
    }
}
