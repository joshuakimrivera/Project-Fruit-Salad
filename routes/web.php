<?php

Route::group([ 'prefix' => '/', 'middleware' => ['web']], function(){
    
    Route::get('/', 'CollegesController@index')->name('CollegesController.index');

    //College of Engineering Routes
    Route::get('/add/college-of-Engineering', 'CollegesController@CEadd')->name('CollegesController.CEadd');
    Route::post('/store/College-of-Engineering', 'CollegesController@CEstore')->name('CollegesController.CEstore');
    Route::get('/delete/College-of-Engineering/{id}', 'CollegesController@CEdelete')->name('CollegesController.CEdelete');
    Route::get('/edit/College-of-Engineering/{id}', 'CollegesController@CEedit')->name('CollegesController.CEedit');
    Route::post('/update/College-of-Engineering/{id}', 'CollegesController@CEupdate')->name('CollegesController.CEupdate');
    Route::get('/show/College-of-Engineering/{id}', 'CollegesController@CEshow')->name('CollegesController.CEshow');
    Route::post('/search/College-of-Engineering', 'CollegesController@CEsearch')->name('CollegesController.CEsearch');
    Route::post('/College-of-Engineering/import', 'CollegesController@CEimport')->name('CEimport');
    Route::get('/College-of-Engineering/sort-by-name', 'CollegesController@CEsortingOfNames')->name('CE.sortingOfName');
    Route::get('/College-of-Engineering/sort-by-birthday', 'CollegesController@CEsortingOfBirthdays')->name('CE.sortingOfBirthday');
    Route::get('/College-of-Engineering/sort-by-age', 'CollegesController@CEsortingOfAges')->name('CE.sortingOfAge');
    Route::get('/College-of-Engineering/sort-by-gender', 'CollegesController@CEsortingOfGenders')->name('CE.sortingOfGender');
    Route::get('/filtered-by-CE/{CE}', 'CollegesController@filterCollegebyCE')->name('filter.college.CE');
    Route::post('/add-student-information', 'CollegesController@addStudent')->name('CollegesController.addStudent');
    Route::get('/filtered-by-CCIS-CpE', 'CollegesController@filterCEDepartmentCpE')->name('filter.college.CE.CpE');
    Route::get('/filtered-by-CCIS-Civil', 'CollegesController@filterCEDepartmentCivil')->name('filter.college.CE.Civil');
    Route::get('/filtered-by-CCIS-ME', 'CollegesController@filterCEDepartmentME')->name('filter.college.CE.ME');
    Route::get('/filtered-by-CCIS-EE', 'CollegesController@filterCEDepartmentEE')->name('filter.college.CE.EE');
    Route::get('/filtered-by-CCIS-ECE', 'CollegesController@filterCEDepartmentECE')->name('filter.college.CE.ECE');
    Route::get('/filtered-by-CCIS-IE', 'CollegesController@filterCEDepartmentIE')->name('filter.college.CE.IE');


    //College of Education Routes
    Route::get('/add/College-of-Education', 'CollegesController@CoEdadd')->name('CollegesController.CoEdadd');
    Route::post('/store/College-of-Education', 'CollegesController@CoEdstore')->name('CollegesController.CoEdstore');
    Route::get('/delete/College-of-Education/{id}', 'CollegesController@CoEddelete')->name('CollegesController.CoEddelete');
    Route::get('/edit/College-of-Education/{id}', 'CollegesController@CoEdedit')->name('CollegesController.CoEdedit');
    Route::post('/update/College-of-Education/{id}', 'CollegesController@CoEdupdate')->name('CollegesController.CoEdupdate');
    Route::get('/show/College-of-Education/{id}', 'CollegesController@CoEdshow')->name('CollegesController.CoEdshow');
    Route::post('/search/College-of-Education', 'CollegesController@CoEdsearch')->name('CollegesController.CoEdsearch');
    Route::post('/College-of-Education/import', 'CollegesController@CoEdimport')->name('CoEdimport');
    Route::get('/filtered-by-CoEd/{CoEd}', 'CollegesController@filterCollegebyCoEd')->name('filter.college.CoEd');
    Route::get('/filtered-by-CoEd-BTE', 'CollegesController@filterCoEdDepartmentBTE')->name('filter.college.CoEd.BTE');
    Route::get('/filtered-by-CoEd-LIS', 'CollegesController@filterCoEdDepartmentLIS')->name('filter.college.CoEd.LIS');
    Route::get('/filtered-by-CoEd-EE', 'CollegesController@filterCoEdDepartmentEE')->name('filter.college.CoEd.EE');
    Route::get('/filtered-by-CoEd-SEME', 'CollegesController@filterCoEdDepartmentSEME')->name('filter.college.CoEd.SEME');
    Route::get('/filtered-by-CoEd-SEMF', 'CollegesController@filterCoEdDepartmentSEMF')->name('filter.college.CoEd.SEMF');
    Route::get('/filtered-by-CoEd-SEMM', 'CollegesController@filterCoEdDepartmentSEMM')->name('filter.college.CoEd.SEMM');
    Route::get('/filtered-by-CoEd-SEMSS', 'CollegesController@filterCoEdDepartmentSEMSS')->name('filter.college.CoEd.SEMSS');

    //College of Computer and Information Sciences Routes
    Route::get('/add/College-of-Computer-and-Information-Sciences', 'CollegesController@CCISadd')->name('CollegesController.CCISadd');
    Route::post('/store/College-of-Computer-and-Information-Sciences', 'CollegesController@CCISstore')->name('CollegesController.CCISstore');
    Route::get('/delete/College-of-Computer-and-Information-Sciences/{id}', 'CollegesController@CCISdelete')->name('CollegesController.CCISdelete');
    Route::get('/edit/College-of-Computer-and-Information-Sciences/{id}', 'CollegesController@CCISedit')->name('CollegesController.CCISedit');
    Route::post('/update/College-of-Computer-and-Information-Sciences/{id}', 'CollegesController@CCISupdate')->name('CollegesController.CCISupdate');
    Route::get('/show/College-of-Computer-and-Information-Sciences/{id}', 'CollegesController@CCISshow')->name('CollegesController.CCISshow');
    Route::post('/search/College-of-Computer-and-Information-Sciences', 'CollegesController@CCISsearch')->name('CollegesController.CCISsearch');
    Route::post('/College-of-Computer-and-Information-Sciences/import', 'CollegesController@CCISimport')->name('CCISimport');
    Route::get('/filtered-by-CCIS/department-CS/{CS}', 'CollegesController@filterCCISDepartmentCS')->name('filter.department.CS');
    Route::get('/filtered-by-CCIS/department-IT/{IT}', 'CollegesController@filterCCISDepartmentIT')->name('filter.department.IT');
    Route::get('/filtered-by-CCIS/{CCIS}', 'CollegesController@filterCollegebyCCIS')->name('filter.college.CCIS');
    

 });

