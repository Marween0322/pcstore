<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function create()
{
    return view('business.register');
}

public function store(Request $request)
{
    $business = new Business();
    $business->name = $request->name;
    $business->email = $request->email;
    $business->address = $request->address;
    $business->save();

    return redirect()->route('home');
}

}
