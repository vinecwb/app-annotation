<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
}
