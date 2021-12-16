<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoomResource;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
            'room_type_id'  => 'numeric'
        ]);

        $rooms = Room::latest();
        $items = Room::all();
        $roomTypes = RoomType::all();

        if ($request->filled('sort')) {
            if ($request->filled('order')) {
                if ($request->order == 'ascending') {
                    if ($request->sort == 'number') {
                        $rooms = Room::orderBy('number', 'asc');
                    }
                    if ($request->sort == 'beds') {
                        $rooms = Room::orderBy('beds', 'asc');
                    }
                    if ($request->sort == 'price') {
                        $rooms = Room::orderBy('price', 'asc');
                    }
                    if ($request->sort == 'story') {
                        $rooms = Room::orderBy('story', 'asc');
                    }
                    if ($request->sort == 'roomType') {
                        $rooms = Room::orderBy('room_type_id', 'asc');
                    }
                    if ($request->sort == 'creation_date') {
                        $rooms = Room::orderBy('created_at', 'asc');
                    }
                }
                if ($request->order == 'descending') {
                    if ($request->sort == 'number') {
                        $rooms = Room::orderBy('number', 'desc');
                    }
                    if ($request->sort == 'beds') {
                        $rooms = Room::orderBy('beds', 'desc');
                    }
                    if ($request->sort == 'price') {
                        $rooms = Room::orderBy('price', 'desc');
                    }
                    if ($request->sort == 'story') {
                        $rooms = Room::orderBy('story', 'desc');
                    }
                    if ($request->sort == 'roomType') {
                        $rooms = Room::orderBy('room_type_id', 'desc');
                    }
                    if ($request->sort == 'creation_date') {
                        $rooms = Room::orderBy('created_at', 'desc');
                    }
                }
            }
            else {
                if ($request->sort == 'number') {
                    $rooms = Room::orderBy('number', 'asc');
                }
                if ($request->sort == 'beds') {
                    $rooms = Room::orderBy('beds', 'asc');
                }
                if ($request->sort == 'price') {
                    $rooms = Room::orderBy('price', 'asc');
                }
                if ($request->sort == 'story') {
                    $rooms = Room::orderBy('story', 'asc');
                }
                if ($request->sort == 'roomType') {
                    $rooms = Room::orderBy('room_type_id', 'asc');
                }
                if ($request->sort == 'creation_date') {
                    $rooms = Room::orderBy('created_at', 'asc');
                }
            }
        }

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
        if ($request->filled('room_status')) {
            $rooms->whereIn('status->en', $request->room_status);
        }
        if ($request->filled('room_beds')) {
            $rooms->whereIn('beds', $request->room_beds);
        }
        if ($request->filled('room_story')) {
            $rooms->whereIn('story', $request->room_story);
        }

        $rooms = $rooms->paginate(10);
        return RoomResource::collection(['rooms' => $rooms,'roomTypes' => $roomTypes, 'items' => $items]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        $mediaItems = $room->getMedia('images');
        return new RoomResource(['room' => $room, 'mediaItems' => $mediaItems]);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
