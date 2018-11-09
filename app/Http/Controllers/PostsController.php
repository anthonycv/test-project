<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use spec\PhpSpec\Listener\MethodReturnedNullListenerSpec;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of posts.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //desc    ->orderBy('created_at', 'desc')
        $postsDesc = Post::latest()->get();

        //asc     ->orderBy('created_at', 'asc')
        $postsAsc = Post::oldest()->get();

        $posts = $postsDesc;

        return view('posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('posts.create');
    }


    /**
     * Store a newly created post in storage.
     *
     * In the model can.
     *
     * Can create a obj with a attribute for each row in the table and then use the method "save()" but need set the fillable and guarded list of fields
     *
     * $post->title= request('title');
     * $post->content= request('body');
     * $post->save();
     *
     * Or can use the method "created" and pass all de obj "request"
     *
     * $post::create(request()->all());
     *
     * Or can select the attributes to pass

     * $post::create(request(['title', 'body']));
     *
     * @param Request $request
     * @return bool
     */
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|min:5',
            'body' => 'required|min:20',
        ]);


        Post::create(request(['title', 'body']));

        return redirect('/posts');
    }


    /**
     * Display the specified post.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return bool
     */
    public function edit($id)
    {
        return false;
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return bool
     */
    public function update(Request $request, $id)
    {
        return flase;
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return bool
     */
    public function destroy($id)
    {
        return false;
    }
}
