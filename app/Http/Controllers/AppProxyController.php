<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppProxyController extends Controller
{
    public function index(){
		return response('Hello, world!')->withHeaders(['Content-Type' => 'application/liquid']);
	}
}
