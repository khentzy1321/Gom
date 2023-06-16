<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\ChurchInfo;
use Illuminate\Http\Request;

class AllChurchWebController extends Controller
{
    public function index()
    {
        $churches = Church::get();

        return view('allchurchsweb.index', compact('churches'));
    }

    public function show(Church $church, $id)
    {
          $church = Church::findOrFail($id);
    
          $church_info = ChurchInfo::where('churchs_id', $church->id)->with('church')->paginate(6);
          return view('allchurchsweb.show', compact('church', 'church_info'));
    }
}
