<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * Class DashboardController
 * @package App\Http\Controllers\Backend
 */
class DashboardController extends Controller
{
    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this -> middleware('auth');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function  __invoke()
    {
        
        return view('backend.dashboard.index');
    }
}
