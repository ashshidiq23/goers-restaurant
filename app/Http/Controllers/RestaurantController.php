<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $query = Restaurant::with('schedules');

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('date')) {
            $dayName = \Carbon\Carbon::parse($request->date)->format('l');
            $query->whereHas('schedules', function ($q) use ($dayName) {
                $q->where('day', $dayName);
            });
        }

        if ($request->filled('time')) {
            $time = $request->time;
            $query->whereHas('schedules', function ($q) use ($time) {
                $q->where('open_time', '<=', $time)
                    ->where('close_time', '>=', $time);
            });
        }

        $restaurants = $query->get();

        return response()->json($restaurants);
    }
}
