<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GraphicsController extends Controller
{
    public function create()
    {
        return view('admin.portfolio.graphics.create');
    }
}
