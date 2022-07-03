<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Booking;

class DashboardController extends Controller
{
    public function index(){
        $countRoom = Room::all()->count();
        $countBookings = Booking::all()->count();
        $countCustomer = Customer::all()->count();
        $countCategories = Category::all()->count();

        return view('admin.dashboard',[
            'countRoom' => $countRoom,
            'countCustomer' => $countCustomer,
            'countCategories' => $countCategories,
            'countBookings' => $countBookings
        ]);
    }
}
