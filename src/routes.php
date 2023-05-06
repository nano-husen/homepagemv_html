<?php


Route::group(['prefix' => 'husen'], function (){
    Route::get('/teste', function(){ echo "jhsahsajs test"; });
});

Route::get('/add/{a}/{b}', [Homepagemv\HomepagemvHtml\HompagemvHtmlController::class,'HompagemvHtml_test']);