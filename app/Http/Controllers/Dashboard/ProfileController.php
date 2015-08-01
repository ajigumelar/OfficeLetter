<?php
/*
 * This file is part of the api package.
 *
 * (c) Eduostia Corporation <http://eduostia.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\DefaultController;


/**
 * @author      : Aji G. P <aji.gumelar@eduostia.com>
 * @created     : 7/31/15
 */
class ProfileController extends DefaultController{

    public function index() {

        return view('dashboard.frm_profile');
    }
}