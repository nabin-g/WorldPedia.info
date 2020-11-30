<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends BackendController
{
    public function index()
    {
        try {
            $this->_datas['lists'] = Category::orderBy('created_at', 'desc')->get();
            return view($this->_pages . 'category.add', $this->_datas);

        } catch (\Exception $e) {
            return view($this->_pages . 'error', [$e->getMessage()]);
        }
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'title' => 'Required',
        ]);

        try {
            Category::create([
                'name' => $request->title,
                'order' => $request->order,
                'slug' => Str::slug($request->title),
            ]);
            return back()->with('success', 'Category Added !!');
        } catch (\Exception $e) {
            $e->getMessage();
        }

    }

    public function show(Request $request)
    {
        $id = (int)$request->id;
        $this->_datas ['lists'] = Category::orderBy('created_at', 'desc')->get();
        $this->_datas ['category'] = Category::findOrFail($id);
        return view($this->_pages . 'category.add', $this->_datas);
    }


    public function edit(Request $request)
    {
        $id = (int)$request->id;

        try {

            $this->_datas = Category::findOrFail($id);

            $this->_datas->name = $request->title;
            $this->_datas->order = $request->order;
            $this->_datas->slug = Str::slug($request->title);

            $this->_datas->save();
            return redirect(route('category-add'))->with('success', 'Updated Successfully !!');

        } catch (QueryException $e) {
            return $e->getMessage();
        }

    }

    public function delete(Request $request)
    {
        $id = (int)$request->id;
        try {
            $category = Category::findOrFail($id);
            $category->posts->delete();
            $category->delete();
            return back()->with('success', 'Deleted Successfully !!');
        } catch (QueryException $e) {
            $e->getMessage();
        } catch (\Exception $e) {
            return $e;
        }
    }


}
