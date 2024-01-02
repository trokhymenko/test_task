<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(Request $request): Factory|View|\Illuminate\Foundation\Application|Application
    {
        $trips = Trip::query()
            ->searchDriver($request->get('search'))
            ->paginate(15)
            ->withQueryString();

        return view('welcome', [
            'trips' => $trips,
            'search' => $request->get('search')
        ]);
    }

    public function report(Request $request): Factory|View|\Illuminate\Foundation\Application|Application
    {
        $trips = Trip::query();

        $trips
            ->select('driver_id', DB::raw("SUM(timestampdiff(MINUTE,pickup,dropoff)) as time"))
            ->groupBy('driver_id')
            ->searchDriver($request->get('search'));

        return view('report', [
            'drivers' => $trips->paginate(15)->withQueryString(),
            'search' => $request->get('search')
        ]);
    }
}
