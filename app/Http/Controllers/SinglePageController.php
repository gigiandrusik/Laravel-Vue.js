<?php

namespace App\Http\Controllers;

/**
 * Class SinglePageController
 *
 * @package App\Http\Controllers
 */
class SinglePageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('app');
    }
}
