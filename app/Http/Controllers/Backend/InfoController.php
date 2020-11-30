<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Info;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InfoController extends BackendController
{
    public function index()
    {
        try {
            $infos = Info::orderBy('id', 'desc')->first();
            return view($this->_pages . 'info.index', compact('infos'));
        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'logo' => 'required|mimes:jpeg,jpg,png|max:2048',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'branch' => 'required',
        ]);

        try {

            if ($request->hasFile('logo')) {
                $file = $request->File('logo');
                $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/frontend/images/', $fileName);
            }
            Info::create([
                'logo' => $fileName,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'branch' => $request->branch,
                'social' => json_encode([
                    'facebook' => $request->facebook,
                    'youtube' => $request->youtube,
                    'linkedln' => $request->linkedln,
                    'gmail' => $request->gmail,
                    'twitter' => $request->twitter,
                ])
            ]);

            return redirect()->back()->with('success', 'Added Successfully !!');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function edit(Request $request)
    {

        $id = (int)$request->id;

        try {

            $infos = Info::findOrFail($id);

            if ($request->hasFile('logo')) {
                $file = $request->File('logo');
                $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/frontend/images/', $fileName);
                $infos->logo = $fileName;
            }
            $infos->address = $request->address;
            $infos->phone = $request->phone;
            $infos->email = $request->email;
            $infos->branch = $request->branch;
            $infos->social = json_encode([
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
                'linkedln' => $request->linkedln,
                'gmail' => $request->gmail,
                'twitter' => $request->twitter,
            ]);
            $infos->save();
            return back()->with('success', 'Successfully Updated !!');
        } catch (QueryException $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);

        } catch (\Exception $e) {
            return view($this->_pages . 'error', ['error' => $e->getMessage()]);
        }
    }
}
