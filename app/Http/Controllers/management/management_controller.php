<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class management_controller extends Controller
{
    //
    public function user_dashboardscreen_request()
    {
        return view('screens/management/home_dashboard');
    }

    public function create_new_item()
    {
        $locations = Location::get();
        $categories = Category::get();
        return view('screens/management/home_dashboard')->with([
            'locations' => $locations,
            'categories' => $categories,
        ]);
    }
}

