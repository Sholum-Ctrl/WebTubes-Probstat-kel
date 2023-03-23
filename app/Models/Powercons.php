<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Powercons extends Model
{
    protected $table = "powercons";
    protected $fillable = [
        'Time', 'Punjab', 'Haryana', 'Rajasthan', 'Delhi', 'UP', 'Uttarakha', 'HP',
        'J&K', 'Chandigarh', 'Chattisgarh', 'Gujarat', 'MP', 'Maharashtra', 'Goa', 'DNH',
        'Andhra_Pradesh', 'Telangana', 'Karnataka', 'Kerala', 'Tamil_Nadu', 'Pondy', 'Bihar',
        'Jharkhand', 'Odisha', 'West_Bengal', 'Sikkim', 'Arunachal', 'Assam', 'Manipur', 'Meghalaya',
        'Mizoram', 'Nagaland', 'Tripura',
    ];
}
