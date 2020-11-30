<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends BackendController
{

    public function viewContactMessages()
    {
        $this->_datas ['datas'] = Contact::Orderby('id', 'desc')->get();
        return view($this->_pages . 'contacts.index', $this->_datas);
    }

    public function messageview(Request $request)
    {
        $id = (int)$request->id;
        $this->_datas ['datas'] = Contact::findOrFail($id);
        $this->_datas ['datas']->save();
        return view($this->_pages . 'contacts.message', $this->_datas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = (int)$request->id;
        $this->_datas ['datas'] = Contact::findOrFail($id);
        $this->_datas ['datas']->delete();
        return redirect(route('contact-message'))->with('success', "Deleted Successfully");

    }

    public function confirm(Request $request)
    {
        $id = (int)$request->id;
        $this->_datas ['datas'] = Contact::findOrFail($id);
        return view($this->_pages . 'contacts.delete', $this->_datas);
    }
}



