<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapitalExpense extends Model
{
    use HasFactory;

    public $fillable = ['Year', 'Month', 'Hardware','HardwareIT','HardwareGencap', 'Software', 'SoftwareIT', 'SoftwareGencap',
        'ExternalLabourGencap', 'ExternalLabourNetwork', 'ExternalLabourIT','InternalCapitalizedLabourNetwork',
        'InternalCapitalizedLabourIT', 'InternalCapitalizedLabourGencap','ProjectID'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
