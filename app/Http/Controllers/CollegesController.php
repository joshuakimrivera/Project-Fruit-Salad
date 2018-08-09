<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Colleges;
use App\CollegeOfEngineerings;
use App\CollegeOfEducations;
use App\CollegeOfComputerAndInformationSciences;

class CollegesController extends Controller
{
    public function index(){
        $shows = CollegeOfEngineerings::latest()->simplePaginate(5);
        $datas = CollegeOfEducations::latest()->simplePaginate(5);
        $outputs = CollegeOfComputerAndInformationSciences::latest()->simplePaginate(5);
    //    return $shows;
       return view('index', compact('shows', 'datas', 'outputs'));  //calls the blade file with the value stored in $shows
    }

    //COLLEGE OF ENGINEERING
    public function CEadd(){
        return view('CollegeOfEngineering.addStudentForm'); //calls the blade file
    }

    public function CEstore(Request $request){
        // return $request;
        $this->validate(request(), [
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => 'required',
            'bday_month' => 'required',
            'bday_day' => 'required',
            'bday_year' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'college' => 'required',
            'department' => 'required',
            'year' => 'required',
            'section' => 'required'
        ]);

        CollegeOfEngineerings::create($request->all());
        return redirect()->route('CollegesController.index');
    }

    public function CEdelete($id){
        $del = CollegeOfEngineerings::find($id);
        $del->delete();
        return back();
    }

    public function CEedit($id)
    {
        $data = CollegeOfEngineerings::find($id);
        // return $data;
        return view('CollegeOfEngineering.editStudentForm', compact('data'));
    }

    public function CEupdate(Request $request, $id)
    {
        // return $request;
        CollegeOfEngineerings::find($id)->update($request->all());
        return redirect()->route('CollegesController.index');
    }

    public function CEshow(Request $request)
    {
        $data = CollegeOfEngineerings::find($request->id);
        // return $data;
        return view('CollegeOfEngineering.showStudentInformation', compact('data'));
    }//calls the blade file with the value stored in $item

    public function CEsearch(Request $request)
    {
        $data = $request->data;
        $result = CollegeOfEngineerings::where('name', 'like', "%$data%")
                        ->orWhere('birthday', 'like', "%$data%")
                        ->orWhere('age', 'like', "%$data%")
                        ->orWhere('gender', 'like', "%$data%")
                        ->orWhere('address', 'like', "%$data%")
                        ->orWhere('college', 'like', "%$data%")
                        ->orWhere('department', 'like', "%$data%")
                        ->orWhere('year', 'like', "%$data%")
                        ->orWhere('section', 'like', "%$data%")
                        ->get();
        return view('CollegeofEngineering.searchResult', compact('result'));
    }


    //COLLEGE OF EDUCATION
    public function CoEdadd(){
        return view('CollegeOfEducation.addStudentForm'); //calls the blade file
    }

    public function CoEdstore(Request $request){
        // return $request;
        $this->validate(request(), [
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => 'required',
            'bday_month' => 'required',
            'bday_day' => 'required',
            'bday_year' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'college' => 'required',
            'department' => 'required',
            'year' => 'required',
            'section' => 'required'
        ]);

        CollegeOfEducations::create($request->all());
        return redirect()->route('CollegesController.index');
    }

    public function CoEddelete($id){
        $del = CollegeOfEducations::find($id);
        $del->delete();
        return back();
    }

    public function CoEdedit($id)
    {
        $data = CollegeOfEducations::find($id);
        // return $data;
        return view('CollegeOfEducation.editStudentForm', compact('data'));
    }

    public function CoEdupdate(Request $request, $id)
    {
        // return $request;
        CollegeOfEducations::find($id)->update($request->all());
        return redirect()->route('CollegesController.index');
    }

    public function CoEdshow(Request $request)
    {
        $data = CollegeOfEducations::find($request->id);
        // return $data;
        return view('CollegeOfEducation.showStudentInformation', compact('data'));
    }//calls the blade file with the value stored in $item

    public function CoEdsearch(Request $request)
    {
        $data = $request->data;
        $result = CollegeOfEducations::where('name', 'like', "%$data%")
                        ->orWhere('birthday', 'like', "%$data%")
                        ->orWhere('age', 'like', "%$data%")
                        ->orWhere('gender', 'like', "%$data%")
                        ->orWhere('address', 'like', "%$data%")
                        ->orWhere('college', 'like', "%$data%")
                        ->orWhere('department', 'like', "%$data%")
                        ->orWhere('year', 'like', "%$data%")
                        ->orWhere('section', 'like', "%$data%")
                        ->get();
        return view('CollegeOfEducation.searchResult', compact('result'));
    }

    //COLLEGE OF COMPUTER AND INFORMATION SCIENCES
    public function CCISadd(){
        return view('CollegeOfComputerAndInformationScience.addStudentForm'); //calls the blade file
    }

    public function CCISstore(Request $request){
        // return $request;
        $this->validate(request(), [
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_initial' => 'required',
            'bday_month' => 'required',
            'bday_day' => 'required',
            'bday_year' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'college' => 'required',
            'department' => 'required',
            'year' => 'required',
            'section' => 'required'
        ]);

        CollegeOfComputerAndInformationSciences::create($request->all());
        return redirect()->route('CollegesController.index');
    }

    public function CCISdelete($id){
        $del = CollegeOfComputerAndInformationSciences::find($id);
        $del->delete();
        return back();
    }

    public function CCISedit($id)
    {
        $data = CollegeOfComputerAndInformationSciences::find($id);
        // return $data;
        return view('CollegeOfComputerAndInformationScience.editStudentForm', compact('data'));
    }

    public function CCISupdate(Request $request, $id)
    {
        // return $request;
        CollegeOfComputerAndInformationSciences::find($id)->update($request->all());
        return redirect()->route('CollegesController.index');
    }

    public function CCISshow(Request $request)
    {
        $data = CollegeOfComputerAndInformationSciences::find($request->id);
        // return $data;
        return view('CollegeOfComputerAndInformationScience.showStudentInformation', compact('data'));
    }//calls the blade file with the value stored in $item

    public function CCISsearch(Request $request)
    {
        $data = $request->data;
        $result = CollegeOfComputerAndInformationSciences::where('name', 'like', "%$data%")
                        ->orWhere('birthday', 'like', "%$data%")
                        ->orWhere('age', 'like', "%$data%")
                        ->orWhere('gender', 'like', "%$data%")
                        ->orWhere('address', 'like', "%$data%")
                        ->orWhere('college', 'like', "%$data%")
                        ->orWhere('department', 'like', "%$data%")
                        ->orWhere('year', 'like', "%$data%")
                        ->orWhere('section', 'like', "%$data%")
                        ->get();
        return view('CollegeOfComputerAndInformationScience.searchResult', compact('result'));
    }
}
