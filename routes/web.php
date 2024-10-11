<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('List_Event.homepage');
});



Route::get('/create_organizer', function () {
    return view('Master_Data.Organizer.Create_Organizer');
});

Route::get('/create_kategori_events', function () {
    return view('Master_Data.Events.Create_Kategori_Events');
});



Route::post('/add_Organizer',[OrganizerController::class,'add_Organizer']);

Route::post('/add_Event_Category',[EventCategoryController::class,'add_Event_Category']);

Route::post('/add_Events',[EventCategoryController::class,'add_Events']);



Route::get('/organizers', [OrganizerController::class, 'List_Organizer']);



Route::get('/category_name', [EventCategoryController::class, 'List_Category_Events']);

Route::get('/organizer/{id}', [OrganizerController::class, 'detailOrganizer']);
Route::post('/add_organizer', [OrganizerController::class, 'add_Organizer']);



Route::get('/organizer/{id}/edit', [OrganizerController::class, 'edit']);
Route::post('/organizer/{id}/update', [OrganizerController::class, 'update']);
Route::post('/organizer/{id}/delete', [OrganizerController::class, 'delete']);



Route::get('/category/{id}/edit', [EventCategoryController::class, 'edit']);
Route::post('/category/{id}/update', [EventCategoryController::class, 'update']);
Route::post('/category/{id}/delete', [EventCategoryController::class, 'delete']);