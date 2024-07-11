<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Routes;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function search(Request $request)
    {
        // Ambil data yang diperlukan dari request
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $jenis_pengguna = $request->input('jenis_pengguna');

        // Query untuk mencari rute sesuai dengan kriteria
        $routes = Routes::query();

        if (!empty($origin)) {
            $routes->where('origin', $origin);
        }

        if (!empty($destination)) {
            $routes->where('destination', $destination);
        }

        if (!empty($jenis_pengguna)) {
            $routes->whereHas('jasa', function ($query) use ($jenis_pengguna) {
                $query->where('name', $jenis_pengguna);
            });
        }

        $results = $routes->get();

        // Kirim data ke halaman blade 'search-results'
        return view('home', compact('results'));
    }
}
