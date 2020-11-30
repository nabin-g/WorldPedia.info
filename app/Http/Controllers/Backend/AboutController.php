<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\About;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AboutController extends BackendController
{
    public function index()
    {
        try {
            $this->_datas ['abouts'] = About::orderBy('id', 'desc')->first();
            return view($this->_pages . 'about.add', $this->_datas);

        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }
    }


    public function add(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'description' => 'required',
            'background' => 'required',
            'methodology' => 'required',
            'approach' => 'required',
        ]);

        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $this->_datas = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/frontend/images/abouts/', $this->_datas);
            }
            About::create([
                'image' => $this->_datas,
                'title' => $request->title,
                'description' => $request->description,
                'backgrounds' => $request->background,
                'methodology' => $request->methodology,
                'approach' => $request->approach
            ]);
            return back()->with('success', 'Added Successfully !!');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function edit(Request $request)
    {
        $id = (int)$request->id;
        try {
            $this->_datas = About::findOrFail($id);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/frontend/images/abouts/', $imageName);
                $this->_datas->image = $imageName;
            }
            $this->_datas->title = $request->title;
            $this->_datas->description = $request->description;
            $this->_datas->backgrounds = $request->background;
            $this->_datas->approach = $request->approach;
            $this->_datas->methodology = $request->methodology;
            $this->_datas->save();
            return back()->with('success', 'Successfully Updated !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }

    }

    public function delete(Request $request)
    {
        $id = (int)$request->id;
        try {
            $this->_datas = About::findOrFail($id);
            $image_path = "/frontend/images/abouts/" . $this->_datas->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $this->_datas->delete();
            return back()->with('alert', 'Deleted !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }

    }

}



