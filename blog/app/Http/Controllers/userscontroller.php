<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class userscontroller extends Controller
{
    //
   //
	function testRequest(Request $req)
	{
		return $req->input();

	}
}
