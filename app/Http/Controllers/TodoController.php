<?php

namespace App\Http\Controllers;

use App\Todo; // davery
use Illuminate\Http\Request;

class TodoController extends Controller
{
  public function __invoke()
  {
    return Todo::all();
  }
}
