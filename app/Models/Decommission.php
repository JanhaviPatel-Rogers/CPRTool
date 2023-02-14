<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Decommission extends Model
{
    use HasFactory;

    public $fillable = ['DecommissionID', 'ProjectID', 'Year','Quarter','InternalLabour', 'ExternalLabour',
        'EstimatedSaving', 'SoftwareGencap', 'NumberOfPlatform'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
