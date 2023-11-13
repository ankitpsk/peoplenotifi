<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('notifications')->get();
        return view('user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation pending

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'remember_token' => Str::random(10),
            'password' => Hash::make($request->password),
            'notification_switch' => $request->notification_switch,
            'phone_number' => $request->phone_number,
        ]);

        return redirect(route('user.index'))->with(['success','User Added Scussfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // validation pending

        $user->update([
            'notification_switch' => $request->notification_switch,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ]);

        return redirect(route('user.show',$user->id))->with(['success','Information Updated Successfully']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function MarkNotification(Notification $notification)
    {
        $notification->checked_at = now();
        $notification->update();
        return redirect()->back();
    }
}
