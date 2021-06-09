<?php

namespace App\Http\Controllers;

use App\Model\Repost;
use Illuminate\Http\Request;

class RepostController extends Controller
{
    public function index(Repost $repost)
  {
    return $repost->get();
  }
}
