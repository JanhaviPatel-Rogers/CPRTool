<?php

namespace App\Models;

use App\User;
use App\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['EmployeeID', 'Name'];


    public function projects(){
        return $this->hasMany(Project::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
