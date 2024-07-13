<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Routes;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Facilities;

class RoutesController extends Controller
{
    public function search(Request $request)
    {
        $query = Routes::with('jasa', 'transport','fasilitas');


        if ($request->departure_time) {
            // Konversi input tanggal ke objek Carbon dan ubah formatnya
            $departureTime = Carbon::createFromFormat('Y-m-d', $request->departure_time)->format('Y-m-d');
            $query->whereDate('departure_time', $departureTime);
        }

        if ($request->origin) {
            $query->where('origin', $request->origin);
        }

        if ($request->destination) {
            $query->where('destination', $request->destination);
        }

        if ($request->jenis_pengguna) {
            $query->whereHas('jasa', function ($q) use ($request) {
                $q->where('id', $request->jenis_pengguna);
            });
        }

        if ($request->jenis_kapal) {
            $query->whereHas('transport', function ($q) use ($request) {
                $q->where('id', $request->jenis_kapal);
            });
        }

        $data['routes'] = $query->get();
        $data['fasilitas'] = Facilities::all();

        return view('home', $data);
    }
}
