<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'national_id' => 'required',
            'country' => 'required',
            'phone_number' => 'required|numeric',
        ]);

        $user = User::create($validated);
        return redirect()->route('admin.reservations.index');
    }
}
