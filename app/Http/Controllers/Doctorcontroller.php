<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Specialist;

class Doctorcontroller extends Controller
{
    public function list()
    {

        //    $dogs=Doctor::all();

        $dogs = Doctor::paginate(5);

        // dd($dogs);
        return view("backend.pages.doctor.doctor", compact('dogs'));
    }


    public function registration()
    {
        $specials= Specialist::all();
        
        return view("backend.pages.doctor.create",compact('specials'));
    }




    public function store(Request $req)
    {

        // dd($req->doctorNumber);
        //dd($req->all());
      
        $req->validate(
            [
                "doctorNumber" => "required|unique:doctors,number"
            ]
        );
        //dd($req ->all());

        $fileName = null;
        if ($req->hasFile('image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $req->file('image')->getClientOriginalExtension();
            $req->file('image')->storeAs('/uploads', $fileName);
        }

        Doctor::create([
            "doctor_name" => $req->doctorName,
            "specialist"=>$req->specialist,
            "image" => $fileName,
            "number" => $req->doctorNumber,
            "address" => $req->doctorAddress,
            "fees" => $req->fees
        ]);


        return redirect()->back()->with('message', 'form Created Successful.');
    }

    public function deleteDoctor($id)
    {

        $dogs = Doctor::find($id);
        $dogs->delete();
        return redirect()->back();
    }
    public function viewDoctor($id)
    {
        $dogs = Doctor::find($id);

        return view('backend.pages.view', compact('dogs'));
    }
    public function edit($doctor_id)
    {
        $dogs = Doctor::find($doctor_id);

        return view('backend.pages.doctor.edit', compact('dogs'));
    }
    public function update(Request $request, $doctor_id)
    {

        $dogs = Doctor::find($doctor_id);
        $fileName = $dogs->image;

        if ($request->hasFile('image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }



        // $dogs->update([
        //     'doctor_name' => $request->doctor_name,
        //     'image' => $fileName,
        //     'number'=>$request->number,
        //     'address'=>$request->address,

        // ]);
        $dogs->doctor_name = $request->doctorName;
        $dogs->image = $fileName;
        $dogs->number = $request->doctorNumber;
        $dogs->address = $request->doctorAddress;
        $dogs->update();
        return redirect()->route('doctor')->with('message', 'Update success');
    }
}
