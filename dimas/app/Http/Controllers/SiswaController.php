<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * @return [type]
     */
    public function getDataSiswa()
    {
    	$siswas = Siswa::all();
    	dd($siswas);
    }

    /**
     * @return [type]
     */
    public function getDataSiswaActive()
    {
    	$id = 1;
    	$siswas = Siswa::selectName()
    				->isActive()
    				->filterById($id)
    				->get();
    	dd($siswas);
    }
}
