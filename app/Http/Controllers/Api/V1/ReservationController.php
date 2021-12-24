<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\User;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'national_id' => 'required|numeric',
            'country' => 'required',
            'phone_number' => 'required',
            'room_id' => 'required',
            'offer_id',
            'paid' => 'required|numeric',
            'started_at' => 'required|date',
            'ended_at' => 'required|date',
            'paid_at' => 'required|date',
            'canceled_at' => 'date',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->national_id = $request->national_id;
        $user->country = $request->country;
        $user->phone_number = $request->phone_number;
        $user->save();

        $reservation = new Reservation();
        // $reservation->price = $request->price;
        $reservation->room_id = $request->room_id;
        $reservation->paid = $request->paid;
        $reservation->started_at = $request->started_at;
        $reservation->offer_id = $request->offer_id;
        $reservation->ended_at = $request->ended_at;
        $reservation->paid_at = $request->paid_at;
        $reservation->canceled_at = $request->canceled_at;
        $reservation->user_id = $user->id;
        // $reservation->room->status = 'Busy';
        if ($reservation->offer->type = 'percentage') {
            $dis = (1 - (0.01 * $reservation->offer->discount));
            $reservation->price = $reservation->room->price * $dis - $reservation->paid;
        } elseif ($reservation->offer->type = 'const') {
            $dis = $reservation->offer->discount * 1;
            $reservation->price = $reservation->room->price - $dis - $reservation->paid;
        }
        $reservation->save();

        $reservation->room->update(['status' => 'busy']);
        if ($reservation->paid != '0') {
            $reservation->transactions()->create([
                'type' => 'In',
                'amount' => $reservation->paid,
                'description' => 'paid at Booking',
            ]);
        }
        return response(['message' => 'review was created'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
