<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Facilities;
use App\Models\Routes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['routes'] = Routes::with('jasa','transport','fasilitas')->get();
        $data['fasilitas'] = Facilities::all();
        return view('home', $data);
    }
}
