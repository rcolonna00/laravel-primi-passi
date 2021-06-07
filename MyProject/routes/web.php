<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "nav_links" => [
            "test_1",
            "test_2",
            "test_3",
            "test_4"
        ]
    ];

    return view("home", $data);
})->name("home");

Route::get("/test1", function () {
    return view("test1");
})->name("test1");

Route::get("/test2", function () {
    return view("test2");
})->name("test2");

Route::get("/test3", function () {
    return view("test3");
})->name("test3");

Route::get("/test4", function () {
    return view("test4");
})->name("test4");