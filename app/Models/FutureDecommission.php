<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class FutureDecommission extends Model
{
    use HasFactory;

    public $fillable = ['FutureDecommissionID', 'ProjectID', 'Year','InternalLabour','ExternalLabour',
        'EstimatedSavings', 'NumberOfPlatform'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
