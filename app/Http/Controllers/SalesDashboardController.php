<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesDashboardController extends Controller
{
    // Display the sales dashboard
    public function index()
    {
        // Your logic to get sales data
        // $salesData = Sales::all(); // Example: Retrieve all sales data

        return view('sales-dashboard.index'); // Return the sales dashboard view
    }
}
