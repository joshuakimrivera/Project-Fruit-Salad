<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\CollegeOfEngineerings;
use App\CollegeOfEducations;
use App\CollegeOfComputerAndInformationSciences;
use Session;
use Excel;
use File;


class CollegesController extends Controller
{
    public function index(){
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $totalCCIS = CollegeOfComputerAndInformationSciences::where('college', 'like', "%$CCIS%")
                        ->count();
        // return $totalCCIS;
        $totalCoEd = CollegeOfEducations::where('college', 'like', "%$CoEd%")
                        ->count();
        $totalCE = CollegeOfEngineerings::where('college', 'like', "%$CE%")
                        ->count();
        
        $shows = CollegeOfEngineerings::latest()->Paginate(2);
        $datas = CollegeOfEducations::latest()->Paginate(2);
        $outputs = CollegeOfComputerAndInformationSciences::latest()->Paginate(5);
       return view('index', compact(
           'shows',
            'datas',
            'outputs',
            'CCIS',
            'CoEd',
            'CE', 
            'totalCCIS',
            'totalCoEd',
            'totalCE'
        ));  //calls the blade file with the value stored in $shows
    }

    public function addStudent(Request $request) {
        // return $request->model;
        $model_name = '\\App\\'.$request->model;
        $model = new $model_name;
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
        $model::create($request->all());
        return redirect()->route('CollegesController.index');
        
    }







    




    
    
    //COLLEGE OF ENGINEERING

    public function filterCEDepartmentCpE() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectCpE = 1;
        $outputs = CollegeOfEngineerings::latest()->where('department', 'like', "%Computer Engineering%")->Paginate(5);
        $datas = CollegeOfEducations::latest()->count();
        $shows = CollegeOfEducations::latest()->count();
        $totalCE = CollegeOfEngineerings::latest()->count();

        $totalCpE = CollegeOfEngineerings::where('department', 'like', "%Computer Engineering%")->count();
        $totalCivil = CollegeOfEngineerings::where('department', 'like', "%Civil Engineering%")->count();
        $totalME = CollegeOfEngineerings::where('department', 'like', "%Mechanical Engineering%")->count();
        $totalEE = CollegeOfEngineerings::where('department', 'like', "%Electrical Engineering%")->count();
        $totalECE = CollegeOfEngineerings::where('department', 'like', "%Electronics Engineering%")->count();
        $totalIE = CollegeOfEngineerings::where('department', 'like', "%Industrial Engineering%")->count();
       return view('CollegeOfEngineering.filterResult', compact(
            'selectCpE',
            'outputs',
            'datas',
            'shows',
            'totalCpE',
            'totalCivil',
            'totalME',
            'totalEE',
            'totalECE',
            'totalIE',
            'CE',
            'CoEd',
            'CCIS',
            'totalCE'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCEDepartmentCivil() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectCivil = 1;
        $outputs = CollegeOfEngineerings::latest()->where('department', 'like', "%Civil Engineering%")->Paginate(5);

        $datas = CollegeOfEducations::latest()->count();
        $shows = CollegeOfEducations::latest()->count();
        $totalCE = CollegeOfEngineerings::latest()->count();

        $totalCpE = CollegeOfEngineerings::where('department', 'like', "%Computer Engineering%")->count();
        $totalCivil = CollegeOfEngineerings::where('department', 'like', "%Civil Engineering%")->count();
        $totalME = CollegeOfEngineerings::where('department', 'like', "%Mechanical Engineering%")->count();
        $totalEE = CollegeOfEngineerings::where('department', 'like', "%Electrical Engineering%")->count();
        $totalECE = CollegeOfEngineerings::where('department', 'like', "%Electronics Engineering%")->count();
        $totalIE = CollegeOfEngineerings::where('department', 'like', "%Industrial Engineering%")->count();
       return view('CollegeOfEngineering.filterResult', compact(
            'selectCivil',
            'outputs',
            'datas',
            'shows',
            'totalCpE',
            'totalCivil',
            'totalME',
            'totalEE',
            'totalECE',
            'totalIE',
            'CE',
            'CoEd',
            'CCIS',
            'totalCE'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCEDepartmentME() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectME = 1;
        $outputs = CollegeOfEngineerings::latest()->where('department', 'like', "%Mechanical Engineering%")->Paginate(5);

        $datas = CollegeOfEducations::latest()->count();
        $shows = CollegeOfEducations::latest()->count();
        $totalCE = CollegeOfEngineerings::latest()->count();

        $totalCpE = CollegeOfEngineerings::where('department', 'like', "%Computer Engineering%")->count();
        $totalCivil = CollegeOfEngineerings::where('department', 'like', "%Civil Engineering%")->count();
        $totalME = CollegeOfEngineerings::where('department', 'like', "%Mechanical Engineering%")->count();
        $totalEE = CollegeOfEngineerings::where('department', 'like', "%Electrical Engineering%")->count();
        $totalECE = CollegeOfEngineerings::where('department', 'like', "%Electronics Engineering%")->count();
        $totalIE = CollegeOfEngineerings::where('department', 'like', "%Industrial Engineering%")->count();
       return view('CollegeOfEngineering.filterResult', compact(
            'selectME',
            'outputs',
            'datas',
            'shows',
            'totalCpE',
            'totalCivil',
            'totalME',
            'totalEE',
            'totalECE',
            'totalIE',
            'CE',
            'CoEd',
            'CCIS',
            'totalCE'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCEDepartmentEE() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectEE = 1;
        $outputs = CollegeOfEngineerings::latest()->where('department', 'like', "%Electrical Engineering%")->Paginate(5);

        $datas = CollegeOfEducations::latest()->count();
        $shows = CollegeOfEducations::latest()->count();
        $totalCE = CollegeOfEngineerings::latest()->count();

        $totalCpE = CollegeOfEngineerings::where('department', 'like', "%Computer Engineering%")->count();
        $totalCivil = CollegeOfEngineerings::where('department', 'like', "%Civil Engineering%")->count();
        $totalME = CollegeOfEngineerings::where('department', 'like', "%Mechanical Engineering%")->count();
        $totalEE = CollegeOfEngineerings::where('department', 'like', "%Electrical Engineering%")->count();
        $totalECE = CollegeOfEngineerings::where('department', 'like', "%Electronics Engineering%")->count();
        $totalIE = CollegeOfEngineerings::where('department', 'like', "%Industrial Engineering%")->count();
       return view('CollegeOfEngineering.filterResult', compact(
            'selectEE',
            'outputs',
            'datas',
            'shows',
            'totalCpE',
            'totalCivil',
            'totalME',
            'totalEE',
            'totalECE',
            'totalIE',
            'CE',
            'CoEd',
            'CCIS',
            'totalCE'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCEDepartmentECE() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectECE = 1;
        $outputs = CollegeOfEngineerings::latest()->where('department', 'like', "%Electronics Engineering%")->Paginate(5);

        $datas = CollegeOfEducations::latest()->count();
        $shows = CollegeOfEducations::latest()->count();
        $totalCE = CollegeOfEngineerings::latest()->count();

        $totalCpE = CollegeOfEngineerings::where('department', 'like', "%Computer Engineering%")->count();
        $totalCivil = CollegeOfEngineerings::where('department', 'like', "%Civil Engineering%")->count();
        $totalME = CollegeOfEngineerings::where('department', 'like', "%Mechanical Engineering%")->count();
        $totalEE = CollegeOfEngineerings::where('department', 'like', "%Electrical Engineering%")->count();
        $totalECE = CollegeOfEngineerings::where('department', 'like', "%Electronics Engineering%")->count();
        $totalIE = CollegeOfEngineerings::where('department', 'like', "%Industrial Engineering%")->count();
       return view('CollegeOfEngineering.filterResult', compact(
            'selectECE',
            'outputs',
            'datas',
            'shows',
            'totalCpE',
            'totalCivil',
            'totalME',
            'totalEE',
            'totalECE',
            'totalIE',
            'CE',
            'CoEd',
            'CCIS',
            'totalCE'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCEDepartmentIE() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectIE = 1;
        $outputs = CollegeOfEngineerings::latest()->where('department', 'like', "%Industrial Engineering%")->Paginate(5);

        $datas = CollegeOfEducations::latest()->count();
        $shows = CollegeOfEducations::latest()->count();
        $totalCE = CollegeOfEngineerings::latest()->count();

        $totalCpE = CollegeOfEngineerings::where('department', 'like', "%Computer Engineering%")->count();
        $totalCivil = CollegeOfEngineerings::where('department', 'like', "%Civil Engineering%")->count();
        $totalME = CollegeOfEngineerings::where('department', 'like', "%Mechanical Engineering%")->count();
        $totalEE = CollegeOfEngineerings::where('department', 'like', "%Electrical Engineering%")->count();
        $totalECE = CollegeOfEngineerings::where('department', 'like', "%Electronics Engineering%")->count();
        $totalIE = CollegeOfEngineerings::where('department', 'like', "%Industrial Engineering%")->count();
       return view('CollegeOfEngineering.filterResult', compact(
            'selectIE',
            'outputs',
            'datas',
            'shows',
            'totalCpE',
            'totalCivil',
            'totalME',
            'totalEE',
            'totalECE',
            'totalIE',
            'CE',
            'CoEd',
            'CCIS',
            'totalCE'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCollegebyCE($CE) {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $totalCE = CollegeOfEngineerings::latest()->count();
        $outputs = CollegeOfEngineerings::latest()->Paginate(5);
        $shows = CollegeOfEducations::latest()->count();
        $datas = CollegeOfComputerAndInformationSciences::latest()->count();
        $totalCoEd = CollegeOfEngineerings::where('college', 'like', "%$CE%")
                        ->count();
        return view('CollegeOfEngineering.filterResult', compact(
            'totalCoEd', 
            'shows', 
            'datas', 
            'outputs',
            'CCIS',
            'CoEd',
            'CE',
            'totalCE'
        ));  //calls the blade file with the value stored in $shows
    }
    
    public function CEimport(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
 
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
 
                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'last_name' => $value->last_name,
                        'first_name' => $value->first_name,
                        'middle_initial' => $value->middle_initial,
                        'date_sorter' => $value->date_sorter,
                        'bday_month' => $value->bday_month,
                        'bday_day' => $value->bday_day,
                        'bday_year' => $value->bday_year,
                        'age' => $value->age,
                        'gender' => $value->gender,
                        'address' => $value->address,
                        'college' => $value->college,
                        'department' => $value->department,
                        'year' => $value->year,
                        'section' => $value->section,
                        ];
                    }
 
                    if(!empty($insert)){
                        $insertData = DB::table('college_of_engineerings')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {                        
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }
 
                return back();
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }

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
        $results = CollegeOfEngineerings::where('last_name', 'like', "%$data%")
                        ->orWhere('first_name', 'like', "%$data%")
                        ->get();
        return view('CollegeofEngineering.searchResult', compact('results'));
    }

    public function CEsortingOfNames() {
        $shows = CollegeOfEngineerings::orderBy('last_name')->Paginate(5);
        $datas = CollegeOfEducations::latest()->Paginate(5);
        $outputs = CollegeOfComputerAndInformationSciences::latest()->Paginate(5);
        return view('index', compact('shows', 'datas', 'outputs'));
    }

    public function CEsortingOfBirthdays() {
        $shows = CollegeOfEngineerings::orderBy('date_sorter')->Paginate(5);
        $datas = CollegeOfEducations::latest()->Paginate(5);
        $outputs = CollegeOfComputerAndInformationSciences::latest()->Paginate(5);
        return view('index', compact('shows', 'datas', 'outputs'));
    }

    public function CEsortingOfGenders() {
        $shows = CollegeOfEngineerings::orderBy('gender')->Paginate(5);
        $datas = CollegeOfEducations::latest()->Paginate(5);
        $outputs = CollegeOfComputerAndInformationSciences::latest()->Paginate(5);
        return view('index', compact('shows', 'datas', 'outputs'));
    }





















    //COLLEGE OF EDUCATION
    public function filterCollegebyCoEd($CoEd) {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $outputs = CollegeOfEducations::latest()->Paginate(5);
        $shows = CollegeOfEngineerings::latest()->count();
        $datas = CollegeOfComputerAndInformationSciences::all()->count();
        $totalCoEd = CollegeOfEducations::where('college', 'like', "%$CoEd%")
                        ->count();
       return view('CollegeOfEducation.filterResult', compact(
            'totalCoEd', 
            'shows', 
            'datas', 
            'outputs',
            'CCIS',
            'CoEd',
            'CE'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCoEdDepartmentBTE() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectBTE = 1;
        $outputs = CollegeOfEducations::latest()->where('department', 'like', "%Business Teacher Education%")->Paginate(5);

        $datas = CollegeOfEngineerings::latest()->count();
        $shows = CollegeOfComputerAndInformationSciences::latest()->count();
        $totalCoEd = CollegeOfEducations::latest()->count();

        $totalBTE = CollegeOfEducations::latest()->where('department', 'like', "%Business Teacher Education%")->count();
        $totalLIS = CollegeOfEducations::latest()->where('department', 'like', "%Library and Information Science%")->count();
        $totalEE = CollegeOfEducations::latest()->where('department', 'like', "%Elementary Education%")->count();
        $totalSEME = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in English%")->count();
        $totalSEMF = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Filipino%")->count();
        $totalSEMM = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Mathematics")->count();
        $totalSEMSS = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Social Studies%")->count();
       return view('CollegeOfEducation.filterResult', compact(
            'CCIS',
            'CoEd',
            'CE',
            'selectBTE',
            'outputs',
            'datas',
            'shows',
            'totalCoEd',
            'totalBTE',
            'totalLIS',
            'totalEE',
            'totalSEME',
            'totalSEMF',
            'totalSEMM',
            'totalSEMSS'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCoEdDepartmentLIS() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectLIS = 1;
        $outputs = CollegeOfEducations::latest()->where('department', 'like', "%Library and Information Science%")->Paginate(5);

        $datas = CollegeOfEngineerings::latest()->count();
        $shows = CollegeOfComputerAndInformationSciences::latest()->count();
        $totalCoEd = CollegeOfEducations::latest()->count();

        $totalBTE = CollegeOfEducations::latest()->where('department', 'like', "%Business Teacher Education%")->count();
        $totalLIS = CollegeOfEducations::latest()->where('department', 'like', "%Library and Information Science%")->count();
        $totalEE = CollegeOfEducations::latest()->where('department', 'like', "%Elementary Education%")->count();
        $totalSEME = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in English%")->count();
        $totalSEMF = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Filipino%")->count();
        $totalSEMM = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Mathematics")->count();
        $totalSEMSS = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Social Studies%")->count();
       return view('CollegeOfEducation.filterResult', compact( 
            'selectLIS',
            'CCIS',
            'CoEd',
            'CE',
            'outputs',
            'datas',
            'shows',
            'totalCoEd',
            'totalBTE',
            'totalLIS',
            'totalEE',
            'totalSEME',
            'totalSEMF',
            'totalSEMM',
            'totalSEMSS'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCoEdDepartmentEE() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectEE = 1;
        $outputs = CollegeOfEducations::latest()->where('department', 'like', "%Elementary Education%")->Paginate(5);

        $datas = CollegeOfEngineerings::latest()->count();
        $shows = CollegeOfComputerAndInformationSciences::latest()->count();
        $totalCoEd = CollegeOfEducations::latest()->count();

        $totalBTE = CollegeOfEducations::latest()->where('department', 'like', "%Business Teacher Education%")->count();
        $totalLIS = CollegeOfEducations::latest()->where('department', 'like', "%Library and Information Science%")->count();
        $totalEE = CollegeOfEducations::latest()->where('department', 'like', "%Elementary Education%")->count();
        $totalSEME = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in English%")->count();
        $totalSEMF = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Filipino%")->count();
        $totalSEMM = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Mathematics")->count();
        $totalSEMSS = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Social Studies%")->count();
       return view('CollegeOfEducation.filterResult', compact( 
            'selectEE',
            'CCIS',
            'CoEd',
            'CE',
            'outputs',
            'datas',
            'shows',
            'totalCoEd',
            'totalBTE',
            'totalLIS',
            'totalEE',
            'totalSEME',
            'totalSEMF',
            'totalSEMM',
            'totalSEMSS'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCoEdDepartmentSEME() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectSEME = 1;
        $outputs = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in English%")->Paginate(5);

        $datas = CollegeOfEngineerings::latest()->count();
        $shows = CollegeOfComputerAndInformationSciences::latest()->count();
        $totalCoEd = CollegeOfEducations::latest()->count();

        $totalBTE = CollegeOfEducations::latest()->where('department', 'like', "%Business Teacher Education%")->count();
        $totalLIS = CollegeOfEducations::latest()->where('department', 'like', "%Library and Information Science%")->count();
        $totalEE = CollegeOfEducations::latest()->where('department', 'like', "%Elementary Education%")->count();
        $totalSEME = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in English%")->count();
        $totalSEMF = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Filipino%")->count();
        $totalSEMM = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Mathematics")->count();
        $totalSEMSS = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Social Studies%")->count();
       return view('CollegeOfEducation.filterResult', compact( 
            'selectSEME',
            'CCIS',
            'CoEd',
            'CE',
            'outputs',
            'datas',
            'shows',
            'totalCoEd',
            'totalBTE',
            'totalLIS',
            'totalEE',
            'totalSEME',
            'totalSEMF',
            'totalSEMM',
            'totalSEMSS'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCoEdDepartmentSEMF() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectSEMF = 1;
        $outputs = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Filipino%")->Paginate(5);

        $datas = CollegeOfEngineerings::latest()->count();
        $shows = CollegeOfComputerAndInformationSciences::latest()->count();
        $totalCoEd = CollegeOfEducations::latest()->count();

        $totalBTE = CollegeOfEducations::latest()->where('department', 'like', "%Business Teacher Education%")->count();
        $totalLIS = CollegeOfEducations::latest()->where('department', 'like', "%Library and Information Science%")->count();
        $totalEE = CollegeOfEducations::latest()->where('department', 'like', "%Elementary Education%")->count();
        $totalSEME = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in English%")->count();
        $totalSEMF = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Filipino%")->count();
        $totalSEMM = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Mathematics")->count();
        $totalSEMSS = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Social Studies%")->count();
       return view('CollegeOfEducation.filterResult', compact( 
            'selectSEMF',
            'CCIS',
            'CoEd',
            'CE',
            'outputs',
            'datas',
            'shows',
            'totalCoEd',
            'totalBTE',
            'totalLIS',
            'totalEE',
            'totalSEME',
            'totalSEMF',
            'totalSEMM',
            'totalSEMSS'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCoEdDepartmentSEMM() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectSEMM = 1;
        $outputs = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Mathematics%")->Paginate(5);

        $datas = CollegeOfEngineerings::latest()->count();
        $shows = CollegeOfComputerAndInformationSciences::latest()->count();
        $totalCoEd = CollegeOfEducations::latest()->count();

        $totalBTE = CollegeOfEducations::latest()->where('department', 'like', "%Business Teacher Education%")->count();
        $totalLIS = CollegeOfEducations::latest()->where('department', 'like', "%Library and Information Science%")->count();
        $totalEE = CollegeOfEducations::latest()->where('department', 'like', "%Elementary Education%")->count();
        $totalSEME = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in English%")->count();
        $totalSEMF = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Filipino%")->count();
        $totalSEMM = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Mathematics")->count();
        $totalSEMSS = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Social Studies%")->count();
       return view('CollegeOfEducation.filterResult', compact( 
            'selectSEMM',
            'CCIS',
            'CoEd',
            'CE',
            'outputs',
            'datas',
            'shows',
            'totalCoEd',
            'totalBTE',
            'totalLIS',
            'totalEE',
            'totalSEME',
            'totalSEMF',
            'totalSEMM',
            'totalSEMSS'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCoEdDepartmentSEMSS() {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $selectSEMSS = 1;
        $outputs = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Social Studies%")->Paginate(5);

        $datas = CollegeOfEngineerings::latest()->count();
        $shows = CollegeOfComputerAndInformationSciences::latest()->count();
        $totalCoEd = CollegeOfEducations::latest()->count();

        $totalBTE = CollegeOfEducations::latest()->where('department', 'like', "%Business Teacher Education%")->count();
        $totalLIS = CollegeOfEducations::latest()->where('department', 'like', "%Library and Information Science%")->count();
        $totalEE = CollegeOfEducations::latest()->where('department', 'like', "%Elementary Education%")->count();
        $totalSEME = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in English%")->count();
        $totalSEMF = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Filipino%")->count();
        $totalSEMM = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Mathematics")->count();
        $totalSEMSS = CollegeOfEducations::latest()->where('department', 'like', "%Secondary Education Major in Social Studies%")->count();
       return view('CollegeOfEducation.filterResult', compact( 
            'selectSEMSS',
            'CCIS',
            'CoEd',
            'CE',
            'outputs',
            'datas',
            'shows',
            'totalCoEd',
            'totalBTE',
            'totalLIS',
            'totalEE',
            'totalSEME',
            'totalSEMF',
            'totalSEMM',
            'totalSEMSS'
        ));  //calls the blade file with the value stored in $shows
    }













    public function CoEdimport(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
 
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
 
                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'last_name' => $value->last_name,
                        'first_name' => $value->first_name,
                        'middle_initial' => $value->middle_initial,
                        'date_sorter' => $value->date_sorter,
                        'bday_month' => $value->bday_month,
                        'bday_day' => $value->bday_day,
                        'bday_year' => $value->bday_year,
                        'age' => $value->age,
                        'gender' => $value->gender,
                        'address' => $value->address,
                        'college' => $value->college,
                        'department' => $value->department,
                        'year' => $value->year,
                        'section' => $value->section,
                        ];
                    }
 
                    if(!empty($insert)){
                        $insertData = DB::table('college_of_educations')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {                        
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }
 
                return back();
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }

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
    public function filterCCISDepartmentCS($CS) {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $IT = "Information Technology";
        $CS = "Computer Science";
        $selectCS = 1;
        $outputs = CollegeOfComputerAndInformationSciences::latest()->where('department', 'like', "%$CS%")->Paginate(5);
        $shows = CollegeOfEngineerings::latest()->count();
        $datas = CollegeOfEducations::latest()->count();
        $totalIT = CollegeOfComputerAndInformationSciences::where('department', 'like', "%$IT%")
                        ->count();
        $totalCS = CollegeOfComputerAndInformationSciences::where('department', 'like', "%$CS%")
                        ->count();
        
       return view('CollegeOfComputerAndInformationScience.filterResult', compact(
            'totalCS',
            'totalIT',
            'shows',
            'datas', 
            'outputs',
            'CCIS',
            'CoEd',
            'CE',
            'IT',
            'CS',
            'selectCS'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCCISDepartmentIT($IT) {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $IT = "Information Technology";
        $CS = "Computer Science";
        $selectIT = 1;
        $outputs = CollegeOfComputerAndInformationSciences::latest()->where('department', 'like', "%$IT%")->Paginate(5);
        $shows = CollegeOfEngineerings::latest()->count();
        $datas = CollegeOfEducations::latest()->count();
        $totalIT = CollegeOfComputerAndInformationSciences::where('department', 'like', "%$IT%")
                        ->count();
        $totalCS = CollegeOfComputerAndInformationSciences::where('department', 'like', "%$CS%")
                        ->count();
       return view('CollegeOfComputerAndInformationScience.filterResult', compact(
            'totalCS',
            'totalIT', 
            'shows', 
            'datas', 
            'outputs',
            'CCIS',
            'CoEd',
            'CE',
            'IT',
            'CS',
            'selectIT'
        ));  //calls the blade file with the value stored in $shows
    }

    public function filterCollegebyCCIS($CCIS) {
        $CCIS = "Computer and Information Science";
        $CoEd = "Education";
        $CE = "Engineering";
        $IT = "Information Technology";
        $CS = "Computer Science";
        $outputs = CollegeOfComputerAndInformationSciences::latest()->Paginate(5);
        $shows = CollegeOfEngineerings::latest()->count();
        $datas = CollegeOfEducations::latest()->count();
        $totalCCIS = CollegeOfComputerAndInformationSciences::where('college', 'like', "%$CCIS%")
                        ->count();
       return view('CollegeOfComputerAndInformationScience.filterResult', compact(
            'totalCCIS', 
            'shows', 
            'datas', 
            'outputs',
            'CCIS',
            'CoEd',
            'CE',
            'IT',
            'CS'
        ));  //calls the blade file with the value stored in $shows
    }

    public function CCISimport(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
 
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
 
                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'last_name' => $value->last_name,
                        'first_name' => $value->first_name,
                        'middle_initial' => $value->middle_initial,
                        'date_sorter' => $value->date_sorter,
                        'bday_month' => $value->bday_month,
                        'bday_day' => $value->bday_day,
                        'bday_year' => $value->bday_year,
                        'age' => $value->age,
                        'gender' => $value->gender,
                        'address' => $value->address,
                        'college' => $value->college,
                        'department' => $value->department,
                        'year' => $value->year,
                        'section' => $value->section,
                        ];
                    }
 
                    if(!empty($insert)){
                        $insertData = DB::table('college_of_computer_and_information_sciences')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {                        
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }
 
                return back();
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }

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
