<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 19-12-2017
 * Time: 16:05
 */

namespace App\Http\Controllers;


use App\Zoo;

class ZooController extends Controller
{
    public function index()
    {
        return Zoo::all();
    }

    public function show(Zoo $zoo)
    {
        return $zoo;
    }
}