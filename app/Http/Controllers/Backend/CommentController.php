<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CommentController extends BackendController
{
    public function index()
    {
        try {
            $this->_datas['comments'] = Comment::get();
            return view($this->_pages . 'comment.add', $this->_datas);

        } catch (\Exception $e) {
            return view($this->_pages . 'error', [$e->getMessage()]);
        }
    }


    public function delete(Request $request)
    {
        $id = (int)$request->id;
        try {
            $this->_datas = Comment::findOrFail($id);
            $this->_datas->delete();
            return back()->with('success', 'Deleted Successfully !!');
        } catch (QueryException $e) {
            $e->getMessage();
        } catch (\Exception $e) {
            return $e;
        }
    }


}
