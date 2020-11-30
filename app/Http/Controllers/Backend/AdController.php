<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Bigyapan;
use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdController extends BackendController
{
    public function index()
    {
        $this->_datas ['ads'] = Bigyapan::orderBy('created_at', 'desc')->paginate(10);
        return view($this->_pages . 'ad.add', $this->_datas);
    }

    public function bigyapan_action(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'image' => 'required',
            'position' => 'required',
            'url' => 'required'

        ]);

        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/frontend/images/bigyapans/', $filename);
            }
            Bigyapan::create([
                'image' => $filename,
                'page' => $request->category,
                'url' => $request->url,
                'position' => $request->position,
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
            $delete = Bigyapan::findOrFail($id);
            $image_path = "/frontend/images/bigyapans/" . $delete->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $delete->delete();
            return back()->with('success', 'Advertisement deleted successfully !!');

        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }
    }
}
