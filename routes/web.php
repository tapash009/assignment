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

/** Default Home Route(Assignment 1) */
Route::get('/', 'AssignmentController@firstAssignment')->name('first-assignment');

/** Route for Assignment 2 */
Route::get('assignment2', 'AssignmentController@secondAssignment')->name('second-assignment');

/** Route for Assignment 3 */
Route::get('assignment3', 'AssignmentController@thirdAssignment')->name('third-assignment');

/** All the Routes for Assignment 4 */
Route::resource('assignment4', 'FourthAssignmentController');
Route::get('appointment-list', 'FourthAssignmentController@appointmentList')->name('assignment4.appointment-list');
Route::get('assignment4/book-appointment/{doctor_id}', 'FourthAssignmentController@bookAppointment')->name('book-appointment');
Route::get('assignment4/complete-appointment/{appointment_id}', 'FourthAssignmentController@completeAppointment')->name('complete-appointment');

