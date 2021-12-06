<?php
namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function store(User $request)
    {
        $validated = $request->validate([
            'fname' => 'required',
            'lnanme' => 'required',
            'national_id' => 'required',
            'country' => 'required',
            'phone_number' => 'required|numeric',
            // 'started_at' => 'required|date',
            // 'ended_at' => 'required|date' ,
            // 'paid_at' => 'required|date' ,
            // 'canceled_at' => 'required|date' ,
        ]);

        $reservation = User::create($validated);
    }
}