<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorBudget extends Model
{
    use HasFactory;

    public $fillable = ['VendorBudgetID', 'VendorID', 'Hardware', 'Software', 'ExternalLabour'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
