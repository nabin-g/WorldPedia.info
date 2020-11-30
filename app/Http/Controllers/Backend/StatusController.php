<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Admin;
use App\Models\Bigyapan;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class StatusController extends BackendController
{
    public function categoryStatus(Request $request)
    {
        $id = (int)$request->id;
        try {
            $status = Category::findOrFail($id);
            if ($status->status === 1) {
                $status->update(['status' => 0]);
            } else {
                $status->update(['status' => 1]);
            }
            return back()->with('success', 'Status Updated !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        } catch
        (\Exception $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        }
    }

    public function adminStatus(Request $request)
    {
        $id = (int)$request->id;
        try {
            $status = Admin::findOrFail($id);
            if ($status->status === 1) {
                $status->update(['status' => 0]);
            } else {
                $status->update(['status' => 1]);
            }
            return back()->with('success', 'Status Updated !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        } catch
        (\Exception $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        }
    }

    public function postStatus(Request $request)
    {
        $id = (int)$request->id;
        try {
            $status = Post::findOrFail($id);
            if ($status->status === 1) {
                $status->update(['status' => 0]);
            } else {
                $status->update(['status' => 1]);
            }
            return back()->with('success', 'Status Updated !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        } catch
        (\Exception $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        }
    }

    public function adStatus(Request $request)
    {

        $id = (int)$request->id;
        try {
            $status = Bigyapan::findOrFail($id);
            if ($status->status === 1) {
                $status->update(['status' => 0]);
            } else {
                $status->update(['status' => 1]);
            }
            return back()->with('success', 'Status Updated !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        } catch
        (\Exception $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        }
    }

    public function galleryStatus(Request $request)
    {
        $id = (int)$request->id;

        try {
            $status = Gallery::findOrFail($id);
            if ($status->status === 1) {
                $status->update(['status' => 0]);
            } else {
                $status->update(['status' => 1]);
            }
            return back()->with('success', 'Status Updated !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        } catch
        (\Exception $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        }
    }
}
