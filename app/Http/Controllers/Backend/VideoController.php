<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Bigyapan;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class VideoController extends BackendController
{
    public function index()
    {
        $this->_datas ['videos'] = Video::orderBy('created_at', 'desc')->paginate(10);
        return view($this->_pages . 'video.add', $this->_datas);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required',
            'short_description' => 'required',

        ]);

        try {
            Video::create([
                'title' => $request->title,
                'link' => $request->link,
                'short_description' => $request->short_description,
            ]);
            return redirect()->back()->with('success', 'Advertisement added successfully!!');
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }
    }

    public function delete(Request $request)
    {
        $id = (int)$request->id;
        try {
            $delete = Video::findOrFail($id);
            $delete->delete();
            return back()->with('success', 'Advertisement deleted successfully !!');

        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }
    }
}
