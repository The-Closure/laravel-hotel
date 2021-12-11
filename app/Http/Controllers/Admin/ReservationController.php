<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Reservation;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();

        return view('admin.reservations.index', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = DB::table('rooms')
            ->where('status', 'available')->get();
        // $rooms = Room::all()->where('status', 'avilable');
        $offers = Offer::all();
        return view('admin.reservations.create', ['rooms' => $rooms, 'offers' => $offers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $validated = $request->validate([
        $request->validate([
            'name' => 'required',
            'national_id' => 'required|numeric',
            'country' => 'required',
            'phone_number' => 'required',
            'price' => 'required|numeric',
            // 'user_id' => 'required',
            'room_id' => 'required',
            'offer_id',
            'paid' => 'required|numeric',
            'started_at' => 'required|date',
            'ended_at' => 'required|date',
            'paid_at' => 'required|date',
            'canceled_at' => 'required|date',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->national_id = $request->national_id;
        $user->country = $request->country;
        $user->phone_number = $request->phone_number;
        $user->save();

        $reservation = new Reservation();
        $reservation->price = $request->price;
        $reservation->room_id = $request->room_id;
        $reservation->paid = $request->paid;
        $reservation->started_at = $request->started_at;
        $reservation->offer_id = $request->offer_id;
        $reservation->ended_at = $request->ended_at;
        $reservation->paid_at = $request->paid_at;
        $reservation->canceled_at = $request->canceled_at;
        $reservation->user_id = $user->id;
        // $reservation->room->status = 'Busy';
        $reservation->save();

        DB::table('rooms')
            ->where('id', $request->room_id)
            ->update(['status' => 'busy']);

        return redirect()->route('admin.reservations.index');

        // $reservation = Reservation::create($validated);
        // return redirect()->route('reservations.index', );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
