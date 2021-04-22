<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return response(view('admin.news.create'));
    }

    public function create(Request $request)
    {
        return response(view('admin.news.create'));
    }

    public function save()
    {
        return redirect()->route('admin::news::create');
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function show()
    {

    }
}
