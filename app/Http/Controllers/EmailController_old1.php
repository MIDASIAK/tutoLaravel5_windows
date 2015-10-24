<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\EmailRequest;

class EmailController extends Controller
{

    public function getForm()
	{
		return view('email');
	}

	public function postForm(
		EmailRequest $request,
		Email $email)
	{
		$email->email = $request->input('email');
		$email->save();
		
		return view('email_ok');
	}

}