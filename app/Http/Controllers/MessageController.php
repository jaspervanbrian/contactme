<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index(Request $request)
    {
    	return view('index');
    }
    public function messages()
    {
    	return json_encode(Message::paginate(7));
    }
    public function create(Request $request)
    {
    	$request->validate([
    		"from" => 'required|string|max:255',
    		"body" => 'required|string|max:255'
    	]);

    	Message::create([
    		"from" => trim($request['from']),
    		"body" => trim($request['body']),
    	]);
    }
}
