<?php

namespace App\Http\Controllers;

use App\Models\Repost;
use Illuminate\Http\Request;

class RepostController extends Controller
{
    public function index(Repost $repost)
  {
        return view('index')->with(['reposts' => $repost->get()]);
  }
}
