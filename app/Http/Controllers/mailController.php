<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send() {
    	Mail::send(['text'=>'mail'],['name','Sarthak'], function($message) {
    		$message->to('panganibanyvonne.yp@gmail.com','To Yvonne')->subject('Test Email');
    	});
    }
}
