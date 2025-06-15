<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Blog::all();
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.home.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = Str::slug($request->title);
        $path = "images/blog/";
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = $slug;
        $blog->content = $request->content;
        $blog->user_id = auth()->id(); // Set the authenticated user's ID

        if ($request->hasFile('featured_image')) {
            // $imageName = time() . '.' . $request->featured_image->extension();
            // $request->featured_image->storeAs($path, $imageName);

            $imageName = $request->featured_image->getClientOriginalName();
            $request->featured_image->move(public_path($path), $imageName);
            $blog->featured_image =  $path . $imageName;

        }

        $blog->save();


        return redirect()->route('page.home')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.home.posts.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->content = $request->content;
        $blog->user_id = auth()->id(); // Set the authenticated user's ID
        $path = "images/blog/";
        
        if ($request->hasFile('featured_image')) {
            // Delete the old image if it exists
            if ($blog->featured_image) {
                $oldImagePath = public_path($path . $blog->featured_image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Save the new image
            // $imageName = time() . '.' . $request->featured_image->extension();
            // $request->featured_image->storeAs('public/images/blog', $imageName);
            // $blog->featured_image = $imageName;

            $imageName = $request->featured_image->getClientOriginalName();
            $request->featured_image->move(public_path($path), $imageName);
            $blog->featured_image =  $path . $imageName;
            
        }

        $blog->save();

        return redirect()->route('page.home')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Delete the image
        if ($blog->featured_image && Storage::exists('public/images/blog/' . $blog->featured_image)) {
            Storage::delete('public/images/blog/' . $blog->featured_image);
        }

        $blog->delete();

        return response()->json(['success' => 'Blog deleted successfully.']);
    }
}
