<?php

namespace App\Http\Controllers;

use App\Models\Roomservice;
use Illuminate\Http\Request;

class RoomserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('roomservice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('roomservice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create room services',Roomservice::class);

        $validated = $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);

        // $roomservice = new Roomservice();
        // $roomservice->name=['en' => $request->name_en,'ar' => $request->name_ar];
        // $roomservice->description=['en' => $request->description_en,'ar' => $request->description_ar];
        // $roomservice->status=$request->status;
        // $roomservice->price=$request->price;
        // $roomservice->save();

        $data = [
            'name' => ['en' => $request->name_en, 'ar' => $request->name_ar],
            'description' => ['en' => $request->description_en , 'ar' => $request->description_ar],
            'status' => $request->status,
            'price' => $request->price
        ];
       Roomservice::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function show(Roomservice $roomservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomservice $roomservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roomservice $roomservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomservice $roomservice)
    {
        //
    }
}
