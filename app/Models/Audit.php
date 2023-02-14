<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $fillable = ['AuditTrailID', 'EnglishString', 'ProjectID', 'Year', 'Month', 'ApprovedBy', 'Section',
                           'Username', 'CreatedAt', 'OldValues', 'NewValues', 'Stage', 'TableName', 'ColumnName',
                           'OperationType', 'Date'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
