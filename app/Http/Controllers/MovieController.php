<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MovieController extends Controller
{

    function __construct()
    {

    }

    public function index()
    {
        return 'Hello from Movie Controller';
    }

    public function view()
    {
        return 'Hello from Movie Controller View Method';
    }

}