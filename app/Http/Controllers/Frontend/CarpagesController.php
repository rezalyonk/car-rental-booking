<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarpagesController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(3);
        // $cars = Car::get();

        // $cars = Car::latest()->get();
        return view('frontend.carPages', compact('cars'));
    }

    public function show(Car $car)
    {
        $related_cars = Car::get();

        return view('frontend.detailPages', compact('car', 'related_cars'));
    }
}
