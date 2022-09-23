<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "weeks",
        "enrall_cost",
        "minimun_skill",
        "bootcamp_id"
    ];
}
