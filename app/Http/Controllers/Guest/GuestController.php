<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    private $username           = 'Khoa';
    private $controller_name    = 'guest';
    private $path_to_view       = 'guest.pages.';
    private $path_to_ui         = 'ui_resources/meranda-master/';

    public function __construct()
    {
        // Var want to share
        view()->share('controller_name', $this->controller_name);
        view()->share('path_to_ui', $this->path_to_ui);
        view()->share('username', $this->username);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        return view($this->path_to_view . 'landing');
        // return view( 'guest.master_layout');
    }
}
