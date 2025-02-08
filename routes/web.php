<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function() {
    $ninjas = [
        ["name" => "Nakula", "skill" => 80, "id" => "1"],
        ["name" => "Sadewa", "skill" => 70, "id" => "2"],
    ];
    
    return view('ninjas.index', [
        "ninjas" => $ninjas
    ]);
});


Route::get('/ninjas/{id}', function($id) {
    $ninjas = [
        ["name" => "Nakula", "skill" => 80, "id" => "1"],
        ["name" => "Sadewa", "skill" => 70, "id" => "2"],
    ];
    
    return view('ninjas.show', [
        "id" => $id
    ]);
});