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

    //College of Education Routes
    Route::get('/add/College-of-Education', 'CollegesController@CoEdadd')->name('CollegesController.CoEdadd');
    Route::post('/store/College-of-Education', 'CollegesController@CoEdstore')->name('CollegesController.CoEdstore');
    Route::get('/delete/College-of-Education/{id}', 'CollegesController@CoEddelete')->name('CollegesController.CoEddelete');
    Route::get('/edit/College-of-Education/{id}', 'CollegesController@CoEdedit')->name('CollegesController.CoEdedit');
    Route::post('/update/College-of-Education/{id}', 'CollegesController@CoEdupdate')->name('CollegesController.CoEdupdate');
    Route::get('/show/College-of-Education/{id}', 'CollegesController@CoEdshow')->name('CollegesController.CoEdshow');
    Route::post('/search/College-of-Education', 'CollegesController@CoEdsearch')->name('CollegesController.CoEdsearch');

    //College of Computer and Information Sciences Routes
    Route::get('/add/College-of-Computer-and-Information-Sciences', 'CollegesController@CCISadd')->name('CollegesController.CCISadd');
    Route::post('/store/College-of-Computer-and-Information-Sciences', 'CollegesController@CCISstore')->name('CollegesController.CCISstore');
    Route::get('/delete/College-of-Computer-and-Information-Sciences/{id}', 'CollegesController@CCISdelete')->name('CollegesController.CCISdelete');
    Route::get('/edit/College-of-Computer-and-Information-Sciences/{id}', 'CollegesController@CCISedit')->name('CollegesController.CCISedit');
    Route::post('/update/College-of-Computer-and-Information-Sciences/{id}', 'CollegesController@CCISupdate')->name('CollegesController.CCISupdate');
    Route::get('/show/College-of-Computer-and-Information-Sciences/{id}', 'CollegesController@CCISshow')->name('CollegesController.CCISshow');
    Route::post('/search/College-of-Computer-and-Information-Sciences', 'CollegesController@CCISsearch')->name('CollegesController.CCISsearch');
 });

