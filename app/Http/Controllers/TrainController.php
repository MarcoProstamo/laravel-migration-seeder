<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::whereRaw("train_departure_time > STR_TO_DATE(?, '%Y-%m-%d %H:%i:%s')", Carbon::now('Europe/Stockholm')->format('Y-m-d H:i'))->get()->sortBy('train_departure_time');
        return view('home', compact('trains'));
    }
}
