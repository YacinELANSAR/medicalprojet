<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Http\Controllers\Controller;
use App\Models\utilisateures;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = posts::with('utilisateures')->orderBy('created_at', 'desc')->get();
        
        $currentTime = Carbon::now();
    
        // Calculate elapsed time for each post
        $elapsedTimes = [];
        foreach ($posts as $post) {
            $postCreatedAt = Carbon::parse($post->created_at);
            $elapsedTimes[] = $postCreatedAt->diffForHumans($currentTime);
        }
    
        return view('homepage', compact('posts', 'currentTime', 'elapsedTimes'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $content = $request->input('content');
        // $request->validate([
        //     'content'=>'required|string|max:5000',
        // ]);
        // posts::create([
        //     'content'=>$content,
        //     'user_id'=>$user,
        // ]);
        // // return response()->json(['msg'=>'success'],200);
        // return redirect()->back()->with('msg','comments added successfully');
        if(auth()->guard('clients')->check()){
        $user = auth()->guard('clients')->user()->id;
            $request->validate([
                'content'=>'required|string|max:5000',
            ]);
            posts::create([
                'content'=>$content,
                'user_id'=>$user,
            ]);
            // $datecreation = posts::pluck('created_at')->get();
            // return response()->json(['msg'=>'success'],200);
            return redirect()->back()->with('msg','comments added successfully');
        }
        else{
            return response()->json(['msg'=>'you are not subscribed to this'],403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id = null)
    {
        posts::where('id',$id)->update([
        'content' => $request->input('content'),
        'modified'=>'updated',
        ]);
        return redirect()->back();
        // return dd('hello');
        // return response()->json(['msg'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if(auth()->guard('clients')->check()){
            posts::destroy($id);
            return redirect()->back()->with('delete','your comment has been deleted');
            // return dd($id);
        }
    }
}
