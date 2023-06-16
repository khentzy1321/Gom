<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\ChurchInfo;
use Illuminate\Http\Request;

class ChurchCategoryController extends Controller
{
    public function index()
    {
        $churches = Church::get();
        return view('churches.index', compact('churches'));
    }

    public function create()
    {
        $churches = Church::get();
        return view('churches.create', compact('churches'));
    }

        public function store(Request $request)
        {
            $validatedData = $request->validate([
 
                'church_location' => 'required|unique:churches',
            ]);

            $church = new Church();
   
            $church->church_location = $validatedData['church_location'];
            $church->save();

            return redirect()->route('churchs.index');
        }

        public function show(Church $church)
        {
                // $category = Category::find($category);
                $churchInfo = ChurchInfo::where('churchs_id', $church->id)->with('church')->paginate(6);
                return view('churches.show', compact('church', 'churchInfo'));
        }

    public function edit($id)
{
    $church = Church::findOrFail($id);
    return view('churches.edit', compact('church'));
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'church_town' => 'required',
            'church_location' => 'required',
        ]);

        $church = Church::findOrFail($id);
   
        $church->church_location = $validatedData['church_location'];
        $church->save();

        return redirect()->route('churchs.index');
    }

    public function destroy($id)
    {
        $church = Church::findOrFail($id);
        $church->delete();

        return redirect()->route('churchs.index');
    }
}
