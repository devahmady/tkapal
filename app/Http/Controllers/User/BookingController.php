<?php

namespace App\Http\Controllers\User;

use App\Models\Routes;
use App\Models\Bookings;
use App\Models\Facilities;
use Illuminate\Http\Request;
use App\Models\Transportations;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function booking()
    {
        $data['routes'] = Routes::with('jasa','transport','fasilitas')->get();
        $data['fasilitas'] = Facilities::all();
        $data ['transportations'] = Transportations::all();
        $data['content'] = ['slider', 'search', 'user'];
        return view('home.booking.template', $data);
    }

    public function create()
    {
        $data ['routes'] = Routes::all();
        $data ['transportations'] = Transportations::all();
        $data['content'] = ['slider', 'search', 'user'];
        return view('home.booking.template', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'route_id' => 'required',
            'transportation_id' => 'required',
            'booking_date' => 'required|date',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
        ]);

        $user = Users::firstOrCreate(
            ['email' => $request->email],
            ['name' => $request->name, 'password' => bcrypt(str_random(10))]
        );

        $booking = new Bookings();
        $booking->user_id = $user->id;
        $booking->route_id = $request->route_id;
        $booking->transportation_id = $request->transportation_id;
        $booking->booking_date = $request->booking_date;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->status = 'pending';
        $booking->save();

        return redirect()->route('payment.create', ['booking' => $booking->id]);
    }
}
