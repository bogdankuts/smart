<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminBaseController extends Controller {

    public function __construct(Admin $admin) {
	    \App::setLocale('ru');
		$admin->updateLastVisit();
    }
}
