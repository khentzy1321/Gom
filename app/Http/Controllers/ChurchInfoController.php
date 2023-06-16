<?php

namespace App\Http\Controllers;

use App\Models\Church;
use App\Models\ChurchInfo;
use Illuminate\Http\Request;

class ChurchInfoController extends Controller
{
    public function index()
    {
        $churchInfos = ChurchInfo::get();
        return view('churchinfo.index', compact('churchInfos'));
    }

    public function create()
    {
        $churchs_info = ChurchInfo::get();
        $churches = Church::get();
        return view('churchinfo.create', compact('churchs_info', 'churches'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pastors_name' => 'required|max:255',
            'church_name' => 'required|max:255',
            'church_desc' => 'required|max:5000',
            'church_loc' => 'required|max:255',   
            'church_image' => 'required',
            'pastors_image' => 'required',
            'churchs_id' => 'required',
        ]);

        $church = new ChurchInfo;

        if($request->hasfile('church_image'))
        {

           foreach($request->file('church_image') as $image)
           {
               $nameImage =$image->getClientOriginalName();
               $image->move(public_path().'/images/churchinfo', $nameImage);
               $data[] = $nameImage;
           }
           $church->church_image=json_encode($data);
        
        }  
         if($request->hasfile('church_image'))
        {

           foreach($request->file('pastors_image') as $image1)
           {
               $nameImage1 =$image1->getClientOriginalName();
               $image1->move(public_path().'/images/churchinfo', $nameImage1);
               $data1[] = $nameImage1;
           }
           $church->pastors_image=json_encode($data1);
        
     

        
        }

        $church->pastors_name = $validatedData['pastors_name'];
        $church->church_name = $validatedData['church_name'];
        $church->church_desc = $validatedData['church_desc'];

        $church->church_loc = $validatedData['church_loc'];
        $church->churchs_id = $validatedData['churchs_id'];
        

        $church->save();


        return redirect()->route('churchsinfo.index')->with('success', 'Church information has been added successfully.');
    }

    public function edit($id)
    {
        $churchInfo = ChurchInfo::find($id);
        $churchs_info = ChurchInfo::get();
        $churches = Church::get();
        return view('churchinfo.edit', compact('churchInfo', 'churchs_info', 'churches'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'pastors_name' => 'required|max:255',
            'church_desc' => 'required|max:5000',
            'church_loc' => 'required|max:255',    
            'church_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pastors_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'churchs_id' => 'required',
        ]);

        $churchInfo = ChurchInfo::find($id);

        if ($request->hasFile('church_image')) {
            $churchImage = $request->file('church_image');
            $churchImageName = time() . '_church.' . $churchImage->getClientOriginalExtension();
            $churchImage->storeAs('public/images/churchinfo', $churchImageName);
            $validatedData['church_image'] = $churchImageName;
        }

        if ($request->hasFile('pastors_image')) {
            $pastorsImage = $request->file('pastors_image');
            $pastorsImageName = time() . '_pastors.' . $pastorsImage->getClientOriginalExtension();
            $pastorsImage->storeAs('public/images/churchinfo', $pastorsImageName);
            $validatedData['pastors_image'] = $pastorsImageName;
        }

        $churchInfo->update($validatedData);
        $churchInfo->save();

        return redirect()->route('churchsinfo.index')->with('success', 'Church information has been updated successfully.');
    }

    public function destroy($id)
    {
        $churchInfo = ChurchInfo::find($id);
        $churchInfo->delete();

        return redirect()->route('churchsinfo.index')->with('success', 'Church information has been deleted successfully.');
    }
}
