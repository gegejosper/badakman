<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    //
    protected $fillable = ['fname', 'lname', 'gender', 'dob','age', 'distance', 'shirtsize', 'team', 'phone', 'email', 'agree', 'payment', 'racebib','refNo', 'address'];
    
    public function scopeSearch($query, $search){
        return $query->where('fname', 'LIKE', '%'. $search. '%')
            ->orWhere('lname', 'LIKE', '%'. $search. '%');
    }
}
