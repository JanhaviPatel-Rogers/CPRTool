<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class OperationalExpense extends Model
{
    use HasFactory;

    public $fillable = ['OperationalExpenseID', 'ProjectID', 'Year', 'Budget'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
