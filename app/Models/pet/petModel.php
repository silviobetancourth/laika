<?php

namespace App\Models\pet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petModel extends Model
{
    use HasFactory;

    protected $table = "pet";
}
