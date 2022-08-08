<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workexperience extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'workexperiences';
    protected $fillable = [
        'companyName',
        'position',
        'responsibility',
        'startDate',
        'endDate', 
    ];

}