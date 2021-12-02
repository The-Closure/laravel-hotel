<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Stevebauman\Purify\Facades\Purify;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Room::class);

        $request->validate([
            'room_type_id'  => 'numeric'
        ]);

        $rooms = Room::latest();

        if ($request->filled('q')) {
            $rooms->where('number', 'like', "%$request->q%");
            $rooms->orwhere('beds', 'like', "%$request->q%");
            $rooms->orWhere('price', 'like', "%$request->q%");
            $rooms->orWhere('description', 'like', "%$request->q%");
            $rooms->orWhere('story', 'like', "%$request->q%");
            $rooms->orWhere('status', 'like', "%$request->q%");
        }
        if ($request->filled('roomTypes')) {
            $rooms->whereIn('room_type_id', $request->roomTypes);
        }

        $rooms = $rooms->paginate(10);
        $roomTypes = RoomType::all();

        return view('admin.rooms.index', ['rooms' => $rooms,'roomTypes' => $roomTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Room::class);
        $roomTypes = RoomType::all();
        return view('admin.rooms.create',['roomTypes' => $roomTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Room::class);
        $validation = $request->validate([
            'number'     => 'required|numeric',
            'beds'     => 'required|numeric',
            'price'   => 'required|numeric',
            'story'    => 'required',
            'description'   => 'required',
            'description*'   => 'required',
            'status'    => 'required',
            'status*'    => 'required',
            'room_type_id'    => 'required|numeric|exists:roomTypes,id',
        ]);

        foreach ($validation['description'] as $description) {
            $description = Purify::clean($request->$description);
        }
        foreach ($validation['status'] as $status) {
            $status = Purify::clean($request->$status);
        }
        $room = Room::create($validation);
        return redirect()->route('admin.rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('admin.rooms.show', ['room' => $room]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $this->authorize('update', $room);
        $this->authorize('update-room', $room);
        return view('admin.rooms.edit', ['room' => $room]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $validation = $request->validate([
            'number'     => 'required|numeric',
            'beds'     => 'required|numeric',
            'price'   => 'required|numeric',
            'story'    => 'required',
            'description'   => 'required',
            'description*'   => 'required',
            'status'    => 'required',
            'status*'    => 'required',
            'room_type_id'    => 'required|numeric|exists:roomTypes,id',
        ]);

        $room->number = $request->number;
        $room->beds = $request->beds;
        $room->price = $request->price;
        $room->story = $request->story;
        foreach ($validation['description'] as $description) {
            $room->description[$description] = Purify::clean($request->$description);
        }
        foreach ($validation['status'] as $status) {
            $room->status[$status] = Purify::clean($request->$status);
        }
        $room->room_type_id = $request->room_type_id;

        return redirect()->route('admin.rooms.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $this->authorize('delete', $room);
        $room->delete();
        return redirect()->route('admin.rooms.index');
    }
}
