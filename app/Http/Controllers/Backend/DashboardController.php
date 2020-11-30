<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class DashboardController extends BackendController
{
    public function index()
    {
        try {
            return view($this->_pages . 'dashboard.index');
        } catch (\Exception $e) {
            return view($this->_pages . 'error')->with('error', $this->$e);
        }
    }
}
