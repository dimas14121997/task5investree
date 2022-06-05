<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    /**
     * @return [type]
     */
    public function getDataGuru()
    {
    	$gurus = Guru::all();
    	dd($gurus);
    }
}
