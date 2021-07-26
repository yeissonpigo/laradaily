<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Controls access when logged in
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkAdmin')->only(['create', 'store', 'edit', 'update', 'destroy', 'show',]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $myPosts = Post::all();
        return view('posts.listAll', ['posts' => $myPosts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('max_execution_time', '300');
        $this->validate($request, array(
            'title' => 'required|max:64',
            'content' => 'required',
        ));

        $myContent =  $request->all();

        //dd($myContent['content']);
        foreach ($myContent['content'] as $key => $myKey) {
            foreach ($myKey['img'] as $img => $myImg) {
                $myContent['content'][$key]['img'][$img] = Storage::disk('s3')->put("images", $myImg); 
            }
        }

        dd($myContent['content']);

        //Storage::disk('google')->putFileAs("", $test['content']['part1']['img'][1], 'test');

        //dd($test['content']['part2']['img'][1]);

        /*$myPost = new Post;
        $myPost->title = $request->title;
        $myPost->content = $myContent;
        $myPost->owner_id = Auth::User()->id;
        $myPost->date = "2012-03-06";

        $myPost->save();*/

        //dd($request->content->file('content.part1.img.1')/*file('content.part1.img.1')*/);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
