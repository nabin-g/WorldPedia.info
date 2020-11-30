<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Gallery;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GalleryController extends BackendController
{
    public function __construct()
    {
        $this->_datas ['galleries'] = Gallery::orderBy('id', 'desc')->get();
    }

    public function index()
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        try {
            return view($this->_pages . 'gallery.add', compact('galleries'));
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
//        dd('testing...');

        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            'caption' => 'required',
            'order' => 'numeric',
        ]);

        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imgName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/frontend/images/gallery', $imgName);
            }
            Gallery::create([
                'image' => $imgName,
                'caption' => $request->caption,
                'order' => $request->order,
            ]);
            return back()->with('success', 'Added Successfully !!');
        } catch (\Exception $e) {
            return $e->getMessage();
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }

    }

    public function delete(Request $request)
    {
        $id = (int)$request->id;
        try {
            $this->_datas = Gallery::findOrFail($id);
            $image_path = "/frontend/images/gallery/" . $this->_datas->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $this->_datas->delete();
            return redirect()->route('galleries')->with('success', 'Deleted Successfully!!');
            /*} catch (QueryException $e) {
                return view($this->_pages . 'error', ['error' => $e->getMessage()]);*/
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function edit(Request $request)
    {
        $id = (int)$request->id;
        try {
            $this->_datas['galleries'] = Gallery::orderBy('id', 'desc')->get();
            $this->_datas ['gallery'] = Gallery::findOrFail($id);
            return view($this->_pages . 'gallery.add', $this->_datas);
        } catch (QueryException $e) {
            return $e->getMessage();
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return $e->getMessage();
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }
    }

    public function editAction(Request $request)
    {
        $id = (int)$request->id;
        try {
            $gallery = Gallery::findOrFail($id);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imgName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/frontend/images/gallery', $imgName);
                $gallery->image = $imgName;
            }
            $gallery->caption = $request->caption;
            $gallery->order = $request->order;
            $gallery->save();
            return redirect()->route('galleries')->with('success', 'Updated Successfully !!');
        } catch (QueryException $e) {
            return $e->getMessage();
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return $e->getMessage();
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }


    }

}
