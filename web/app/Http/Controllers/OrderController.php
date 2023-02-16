<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Appointment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('validated', true)->get();
        $appointments = Appointment::all();
        
        return view('orders.index', [
            'orders' => $orders,
            'appointments' => $appointments
        ]);
    }
}
