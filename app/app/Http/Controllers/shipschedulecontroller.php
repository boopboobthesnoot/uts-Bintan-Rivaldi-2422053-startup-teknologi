<?php

namespace App\Http\Controllers;

use App\Models\Island;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ShipScheduleController extends Controller
{
    public function index(Request $request)
    {
        $islands = Island::all();

        // Query dasar mengambil jadwal kapal beserta relasi pulaunya
        $query = Schedule::with(['origin', 'destination']);

        // Filter berdasarkan pencarian warga
        if ($request->filled('origin')) {
            $query->where('origin_island_id', $request->origin);
        }
        if ($request->filled('destination')) {
            $query->where('destination_island_id', $request->destination);
        }

        $schedules = $query->orderBy('departure_time', 'asc')->get();

        return view('schedules.index', compact('schedules', 'islands'));
    }
}