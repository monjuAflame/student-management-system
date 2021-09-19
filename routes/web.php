<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin');


Route::group(['middleware'=>'authen'], function (){
    Route::get('/logout', 'LoginController@logout');
    Route::get('/dashboard', 'DashboardController@dashboard');
});

Route::group(['middleware'=>['authen','roles'], 'roles'=>['admin']], function (){
   
    Route::get('/manage/course',['as'=>'manageCourse','uses'=>'CourseController@getManageCourse']);

    Route::post('/manage/course/insert',['as'=>'postInsertAcademic','uses'=>'CourseController@postInsertAcademic']);
    
    Route::post('/manage/course/insert-program',['as'=>'postInsertProgram','uses'=>'CourseController@postInsertProgram']);
    
    Route::post('/manage/course/insert-level',['as'=>'postInsertLevel','uses'=>'CourseController@postInsertLevel']);
    
    Route::get('/manage/course/showLevel',['as'=>'showLevel','uses'=>'CourseController@showLevel']);

    Route::post('/manage/course/insert-shift',['as'=>'postInsertShift','uses'=>'CourseController@postInsertShift']);

    Route::post('/manage/course/insert-time',['as'=>'postInsertTime','uses'=>'CourseController@postInsertTime']);

    Route::post('/manage/course/insert-batch',['as'=>'postInsertBatch','uses'=>'CourseController@postInsertBatch']);

    Route::post('/manage/course/insert-group',['as'=>'postInsertGroup','uses'=>'CourseController@postInsertGroup']);

    Route::post('/manage/course/insert-class',['as'=>'postInsertClass','uses'=>'CourseController@postInsertClass']);

    Route::get('/manage/course/show-classInfo',['as'=>'showClassInformation','uses'=>'CourseController@showClassInformation']);

    Route::post('/manage/course/edit-classInfo',['as'=>'editClass','uses'=>'CourseController@postEditClass']);

    Route::post('/manage/course/update-classInfo',['as'=>'postUpdateClass','uses'=>'CourseController@postUpdateClass']);

    Route::post('/manage/course/delete-classInfo',['as'=>'postDeleteClass','uses'=>'CourseController@postDeleteClass']);

    //=========================student===========================
    Route::get('/student/getregister',['as'=>'getStudentRegister','uses'=>'StudentController@getStudentRegister']);
    Route::post('/student/register',['as'=>'postRegisterStudent','uses'=>'StudentController@postRegisterStudent']);
    //=========================payment============================
    Route::get('/student/payment',['as'=>'getPayment','uses'=>'FeeController@getPayment']);

    Route::get('/student/show/payment',['as'=>'showPayment','uses'=>'FeeController@showStudentPayment']);
    
    Route::get('/student/show/gotPayment/{student_id}',['as'=>'gotPayment','uses'=>'FeeController@gotPayment']);

    Route::post('/student/save/payment',['as'=>'savePayment','uses'=>'FeeController@savePayment']);

    Route::post('/student/create/fee',['as'=>'createFee','uses'=>'FeeController@createFee']);

    Route::get('/student/fee/pay',['as'=>'pay','uses'=>'FeeController@pay']);

    Route::post('/student/fee/extraPay',['as'=>'extraPay','uses'=>'FeeController@extraPay']);

    Route::get('/student/fee/printInvoice/{receipt_id}',['as'=>'printInvoice','uses'=>'FeeController@printInvoice']);


        //=============create new course=============
    Route::get('student/course/new',['as'=>'createStudentNewCourse','uses'=>'FeeController@createStudentNewCourse']);


    //======================================================================================
    Route::get('/stu/pay/fees',['as'=>'getPaymentFees','uses'=>'FeesController@getPayment']);
    Route::get('/stu/pay/feesinfo',['as'=>'showStudentPayment','uses'=>'FeesController@showStudentPayment']);
    Route::get('/stu/pay/gotPayment/{student_id}',['as'=>'gotPaymentd','uses'=>'FeesController@gotPayment']);
    Route::post('/stu/save/payment',['as'=>'savePaymentd','uses'=>'FeesController@savePayment']);
    Route::post('/stu/create/fee',['as'=>'createFeed','uses'=>'FeesController@createFee']);
    Route::get('/stu/fee/pay',['as'=>'payd','uses'=>'FeesController@pay']);
     Route::post('/stu/fee/extraPay',['as'=>'extraPayd','uses'=>'FeesController@extraPay']);


     Route::get('stu/course/new',['as'=>'createStudentNewCourse','uses'=>'FeesController@createStudentNewCourse']);
});
