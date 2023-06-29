<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $posts = Article::all();
        return view('dashboard.admin.articles.index', compact('posts'));
    }

    public function create()
    {
        return view('dashboard.admin.articles.create');
    }

    public function store(Request $request)
    {
        // Valiation First
        $valiation = $request->validate([
            'title'     => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'content'   => 'required',
        ]);

        // Asign Photo Name
        $photoName = $request->thumbnail->getClientOriginalName();
        $file = $request->file('thumbnail');

        // Make Folder with doctors_photos if not exist then move the photo there
        $file->storeAs('public/posts_thumbnail', $photoName);

        // Store Every Field
        $newStore = new Article();
        $newStore->title        = $request->title;
        $newStore->cover_image  = $photoName;
        $newStore->article      = $request->content;
        $newStore->save();

        // return redirect to the blog index
        return redirect()->route('blog.index')->with('success', 'Your Post Has Been Saved Successfuly !');
    }

    public function show(string $id)
    {
        $post = Article::findOrFail($id);
        return view('dashboard.admin.articles.show', compact('post'));
    }

    public function edit(string $id)
    {
        $post = Article::findOrFail($id);
        return view('dashboard.admin.articles.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        // Validate First
        $valiation = $request->validate([
            'title'     => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'content'   => 'required',
        ]);

        // get the post data using the id
        $postEdit = Article::findOrFail($id);

        if ( $request->hasfile('thumbnail') ) { // if file selected then

            // Asign Photo Name
            $photoName = $request->thumbnail->getClientOriginalName();
            $file = $request->file('thumbnail');

            // upload and update the new one

            // get the old photo path
            // asset('storage/posts_thumbnail/'.$post->cover_image)

            $path = '../storage/app/public/posts_thumbnail/'.$postEdit->cover_image;

            if (file_exists($path)) { // file exist

                // delete the file
                unlink($path);

                // Make Folder with posts_thumbnail if not exist then move the photo there
                $file->storeAs('public/posts_thumbnail', $photoName);

                // Update Every Field
                $postEdit->title        = $request->title;
                $postEdit->cover_image  = $photoName;
                $postEdit->article      = $request->content;
                $postEdit->save();

                // return redirect
                return redirect()->route('blog.index')->with('success', 'Post Data Updated successfuly With New Thumbnail');

            } else { // file does not exist so continue

                // Make Folder with posts_thumbnail if not exist then move the photo there
                $file->storeAs('public/posts_thumbnail', $photoName);

                // Update Every Field
                $postEdit->title        = $request->title;
                $postEdit->cover_image  = $photoName;
                $postEdit->article      = $request->content;
                $postEdit->save();

                // return redirect
                return redirect()->route('blog.index')->with('success', 'Post Data Updated successfuly But Thumbnail Does Not Exist');

            }



        } else {

            // Update Every Field Except Photo
            $postEdit->title        = $request->title;
            $postEdit->article      = $request->content;
            $postEdit->save();

            return redirect()->route('blog.index')->with('success', 'Post Data Updated successfuly');

        }


    }

    public function destroy(string $id)
    {
        // get the row from db using the id of the post
        $row = Article::findOrFail($id);

        // if there is image in db
        if ($row->cover_image) {

            // get the full path
            $path = '../storage/app/public/posts_thumbnail/'.$row->cover_image;
            // delete file using path if file exist and delete the row
            if (file_exists($path)) {
                // delete the file
                unlink($path);
                // delete the row in db
                $row->delete();
                // return success message
                return redirect()->route('blog.index')->with('success', 'Post deleted With Thumbnail Successfuly !');
            } else {
                // delete the row in db
                $row->delete();
                // return success message
                return redirect()->route('blog.index')->with('success', 'Post deleted but Thumbnail file not found on the server');
            }

        } else {
            // delete the row in db
            $row->delete();
            // return success message
            return redirect()->route('blog.index')->with('success', 'Post deleted but no Thumbnail found in database to delete');
        }
    }
}
