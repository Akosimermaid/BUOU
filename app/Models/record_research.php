<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record_research extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'Date',
        'Title',
        'Research_Name',
        'Partner_Agency',
        'Designation',
        'Start_Date',
        'Target_Date',
        'CREC',
        'URECOM',
        'Fund',
        'Budget',
        'Remarks',
    ];
    
    
}
