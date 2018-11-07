<?php

namespace App\Http\Controllers;

use App\Type;
use App\Post;
use Auth;
use Session;
use Redirect;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('type')->orderBy('created_at', 'DESC')->paginate(5);
        $posts = compact('posts');
        return view('home', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::orderBy('id')->get();
        return view('create_post', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $post = new Post();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->author = Auth::user()->name;
        $post->author_id = Auth::user()->id;
        $post->type_id = $request->input('type');
        $post->save();

        Session::flash('message', 'Félicitations, vous venez de publier un nouveau document pour la communauté');
        Session::flash('flash_type', 'alert-success');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with('type')->find($id);
        return view('show_post', compact('post'));
    }


    /**
     * Display a filtered listing of the ressources.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
         if (!empty(Input::get('type'))) {
        $types = Input::get('type');
        $posts = Post::whereIn('type_id', $types)->orderBy('created_at', 'DESC')->get();
        return view('filter_post', compact('posts'));
         }
        else {
            Session::flash('message', "Aucune séléction n'a été faite pour filtrer les résultats");
            Session::flash('flash_type', 'alert-danger');
            return redirect()->route('home');
        }
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
