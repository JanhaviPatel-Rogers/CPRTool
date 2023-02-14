<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Benefit extends Model
{
    use HasFactory;

    public $fillable = ['ProjectID', 'RevenueIncrease2022', 'RevenueIncrease2023','RevenueIncrease2024',
        'RevenueProtection2022', 'RevenueProtection2023', 'RevenueProtection2024', 'OtherRevenue2022', 'OtherRevenue2023',
        'OtherRevenue2024', 'OpexSavings2022', 'OpexSavings2023', 'OpexSavings2024','OpexAvoidance2022', 'OpexAvoidance2023',
        'OpexAvoidance2024', 'OtherOpexSavings2022', 'OtherOpexSavings2023', 'OtherOpexSavings2024'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
