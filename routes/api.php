<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student/sign-up',[
    'uses'=> 'StudentController@new_student'
]);
Route::post('/student/mark-attendence',[
    'uses'=>'StudentController@mark_attendence'
]);
Route::post('/student/check',[
    'uses'=>'StudentController@check_student_available'
]);
Route::post('/student/rollback-attendance',[
    'uses'=> 'StudentController@update_attendance_status'
]);
Route::get('/student/today-time-table',[
    'uses'=>'StudentController@get_time_table'
]);

Route::post('/login',[
    'uses'=> 'AuthController@login'
]);

// Route::fallback(function(){
//     return response()->json(['message' => 'Not Found.'], 404);
// })->name('api.fallback.404');