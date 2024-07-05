<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceDashboardController extends Controller
{
    // Display the service dashboard
    public function index()
    {
        // Example logic to get service data
        // $serviceData = Service::all();

        return view('service-dashboard.index'); // Return the service dashboard view
    }
}
