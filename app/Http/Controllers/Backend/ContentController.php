<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class ContentController extends BackendController
{
    public function index()
    {
        try {
            $this->_datas ['categories'] = Category::all();
            $this->_datas ['posts'] = Post::orderBy('id', 'desc')->paginate(10);
            return view($this->_pages . 'category.content.add', $this->_datas);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function create()
    {
        try {
            $categories = Category::all();
            return view($this->_pages . 'category.content.edit', compact('categories'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

//        dd($request->toArray());
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'details' => 'required',
            'category' => 'required',
        ]);

        $imgName = null;
        $middleImgName = null;
        $lastImgName = null;
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imgName = 'image' . Str::random(20) . '.' . $file->getClientOriginalExtension();
                //CDN
                $file->move(public_path() . '/frontend/images/posts/', $imgName);
            }
            if ($request->hasFile('middle_image')) {
                $file = $request->file('middle_image');
                $middleImgName = 'middle_image' . Str::random(20) . '.' . $file->getClientOriginalExtension();
                //CDN
                $file->move(public_path() . '/frontend/images/posts/', $middleImgName);
            }
            if ($request->hasFile('last_image')) {
                $file = $request->file('last_image');
                $lastImgName = 'last_image' . Str::random(20) . '.' . $file->getClientOriginalExtension();
                //CDN
                $file->move(public_path() . '/frontend/images/posts/', $lastImgName);
            }
            $post = Post::create([
                'image' => $imgName,
                'middle_image' => $middleImgName,
                'last_image' => $lastImgName,
                'youtube_link' => $request->youtube_link ?? null,
                'title' => $request->title,
                'details' => $request->details,
                'meta_key' => $request->meta_key ?? null,
                'meta_description' => $request->meta_description ?? null,
                'author' => $request->author ?? null,
                'slug' => Str::slug($request->title),
                'like' => 1,
                'view' => 4
            ]);
            $post_id = $post->id;
            $post->category()->sync($request->category, false);
            return back()->with('success', 'Added successfully!!');
        } catch
        (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }
    }

    public function show(Request $request)
    {
        $id = (int)$request->id;
        try {
            $post = Post::findOrFail($id);
            $categories = Category::all();
            return view($this->_pages . 'category.content.edit', compact('post', 'categories'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, $id)
    {

        $post = Post::findOrFail($id);
        $imgName = $post->image;
        $middleImgName = $post->middle_image;
        $lastImgName = $post->last_image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imgName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            //CDN
            $file->move(public_path() . '/frontend/images/posts/', $imgName);
        }
        if ($request->hasFile('middle_image')) {
            $file = $request->file('middle_image');
            $middleImgName = 'middle_image' . Str::random(20) . '.' . $file->getClientOriginalExtension();
            //CDN
            $file->move(public_path() . '/frontend/images/posts/', $middleImgName);
        }
        if ($request->hasFile('last_image')) {
            $file = $request->file('last_image');
            $lastImgName = 'last_image' . Str::random(20) . '.' . $file->getClientOriginalExtension();
            //CDN
            $file->move(public_path() . '/frontend/images/posts/', $lastImgName);
        }
        $post->Update([
            'image' => $imgName,
            'middle_image' => $middleImgName,
            'last_image' => $lastImgName,
            'youtube_link' => $request->youtube_link ?? null,
            'title' => $request->title,
            'details' => $request->details,
            'meta_key' => $request->meta_key ?? null,
            'meta_description' => $request->meta_description ?? null,
            'author' => $request->author ?? null,
            'slug' => Str::slug($request->title),
            'like' => 1,
            'view' => 4
        ]);
//        dd($request->category);
        $post->category()->sync($request->category);
        return back()->with('success', 'updated successfully!!');
    }

    public function delete(Request $request)
    {
        $id = (int)$request->id;
        try {
            $this->_datas = Post::findOrFail($id);
            $image_path = "/frontend/images/posts/" . $this->_datas->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $this->_datas->delete();
            return back()->with('success', 'Deleted Successfully !!');
            /* } catch (QueryException $e) {
                 return view($this->_pages . 'error', ['error' => $e->getMessage()]);
             */
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function postDetailByAuthor($author){
        $posts = Post::where('author', $author)->orderBy('created_at','desc')->paginate();
        return view($this->_pages . 'category/content/author',  compact('posts'));
    }


}
