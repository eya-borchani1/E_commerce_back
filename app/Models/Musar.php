<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musar extends Model
{
    protected $table = 'musars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];  
}
