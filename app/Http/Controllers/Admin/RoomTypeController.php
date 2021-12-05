<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Stevebauman\Purify\Facades\Purify;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $this->authorize('view all roomType', RoomType::class);

        $roomTypes = RoomType::latest();

        if ($request->filled('q')) {
            $roomTypes->where('name', 'like', "%$request->q%");
            $roomTypes->orWhere('price', 'like', "%$request->q%");
            $roomTypes->orWhere('description', 'like', "%$request->q%");
        }

        $roomTypes = $roomTypes->paginate(10);
        return view('admin.roomTypes.index', ['roomTypes' => $roomTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create roomType', RoomType::class);
        return view('admin.roomTypes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->dd();
        // $this->authorize('create roomType', RoomType::class);
        $validation = $request->validate([
            'name'     => 'required',
            'name*'     => 'required|min:3',
            'price'   => 'required|numeric',
            'description'    => 'required',
            'description*'    => 'required',
        ]);

        foreach ($validation['description'] as $description) {
            $description = Purify::clean($request->$description);
        }
        $roomType = RoomType::create($validation);
        return redirect()->route('admin.roomTypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function show(RoomType $roomType)
    {
        // $this->authorize('show roomType', RoomType::class);
        return view('admin.roomTypes.show', ['roomType' => $roomType]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomType $roomType)
    {
        // $this->authorize('edit roomType', $roomType);
        return view('admin.roomTypes.edit', ['roomType' => $roomType]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $roomType)
    {
        $validation = $request->validate([
            'name'     => 'required',
            'name*'     => 'required|min:3',
            'price'   => 'required|numeric',
            'description'   => 'required',
            'description*'   => 'required',
        ]);

        $roomType->name = $request->name;
        $roomType->price = $request->price;
        foreach ($validation['description'] as $description) {
            $roomType->description[$description] = Purify::clean($request->$description);
        }
        $roomType->save();

        return redirect()->route('admin.roomTypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomType $roomType)
    {
        // $this->authorize('delete roomType', $roomType);
        $roomType->delete();
        return redirect()->route('admin.roomTypes.index');
    }
}
