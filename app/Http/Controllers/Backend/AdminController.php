<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Admin;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends BackendController
{
    public function index()
    {
        $admins = Admin::where('is_super', 0)->get();
        return view($this->_pages . 'profile.profile', compact('admins'));
    }

    public function edit()
    {
        return view($this->_pages . 'profile.edit');
    }

    public function edit_action(Request $request)
    {
        $id = (int)$request->id;
        try {
            $edit = Admin::findOrFail($id);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/backend/images/profile_img', $imageName);
                $edit->image = $imageName;
            }
            $edit->fname = $request->fname;
            $edit->lname = $request->lname;
            $edit->email = $request->email;
            $edit->save();
            return back()->with('success', 'Updated Successfully !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        }
    }

    public function password(Request $request)
    {
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required|min:6|',
        ]);
        $id = (int)$request->id;
        $data = Admin::findOrFail($id);
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = Admin::findOrFail($id);
        if (!Hash::check($data['oldpassword'], $user->password)) {
            return redirect()->back()->with('error', 'Password not Matched!!!');
        } else {
            $user->password = $data['password'];
            $user->save();
            return redirect()->back()->with('success', 'Succesfully Updated!!!');

        }
    }

    public function show()
    {
        try {
            return view($this->_pages . 'register');
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error', [$e->getMessage()]]);
        }
    }

    public function register(Request $request)
    {
        $this->validate($request, [

            'fname' => 'required|string|min:4',
            'lname' => 'required|string|min:4',
            'email' => 'required|string|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/backend/images/profile_img/', $imageName);
            }
            $request['password'] = bcrypt($request->password_confirmation);
            Admin::create([
                'image' => $imageName,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            return redirect(route('admin-profile'))->with('success', 'Registered Successfully');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error', $e->getMessage()]);
        }
    }

    public function delete(Request $request)
    {
        $id = (int)$request->id;
        try {
            $delete = Admin::findOrFail($id);
            $image_path = "/backend/images/profile_img/" . $delete->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $delete->delete();
            return back()->with('alert', 'Deleted !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }

    }
}


