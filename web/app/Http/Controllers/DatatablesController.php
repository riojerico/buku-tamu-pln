<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use User;

class DatatablesController extends Controller
{
  public function getIndex()
  {
    return view('datatables.index');
  }

  public function anyData()
  {
      return DataTables::of(User::query())->make(true);
  }
}
