<?php
/*
 * This file is part of the api package.
 *
 * (c) Eduostia Corporation <http://eduostia.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


/**
 * @author      : Aji G. P <aji.gumelar@eduostia.com>
 * @created     : 7/30/15
 */
class DefaultController extends Controller{

    public function __construct() {

        /*if(!Auth::check()) {

            $this->middleware('auth', ['except' => 'getLogin']);
        }*/

    }

    public function authenticated($request, $v)
    {
        var_dump($v); exit();
    }
    public function index() {

        return view('home');
    }
}