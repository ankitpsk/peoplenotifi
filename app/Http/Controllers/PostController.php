<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $posts = Post::all();
        return view('post.index',['posts'=>$posts]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $message_type = ['marketing','invoices','system'];
        return view('post.create',['message_type'=>$message_type,'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->users_type == 'all'){
            $all_users = User::all()->pluck('id')->toArray();
            $users = implode(',',$all_users);
        }else{
            $users = implode(',',$request->users);
        }

        $post = Post::create([
            'type' => $request->type,
            'short_text' => $request->short_text,
            // 'users' => $users,
            'expire_at' => \Carbon\Carbon::parse($request->expire_at)->format('Y-m-d H:i'),
            'created_at' => now(),
        ]);

        // lets Notifi User
        foreach(explode(',',$users) as $user){
            Notification::create([
                'user_id'=> $user,
                'post_id'=> $post->id,
            ]);
        }

        return redirect(route('post.index'))->with(['success','Post Added Scussfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
