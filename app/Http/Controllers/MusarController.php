<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musar;
class MusarController extends BaseController   
{


        public function __construct()
    {
        $this->model = Musar::class; // Inject the model to use
    }
    
}