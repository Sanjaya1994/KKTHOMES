<?php
use\App\Message;
use\App\User;

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

Route::group(['middleware'=>['web']], function(){
      
    Route::get('/',[
        'uses'=>'SignUpController@indexhome',
        'as'=>'index'
    ]);
    Route::get('/index',[
        'uses'=>'SignUpController@indexhome',
        'as'=>'index'
    ]);
    // Route::get('/404',[
    //     'uses'=>'SignUpController@get404',
    //     'as'=>'404'
    //     ]);
        Route::get('/about',[
            'uses'=>'SignUpController@getabout',
            'as'=>'about'
            ]);
            Route::get('/our-team',[
                'uses'=>'SignUpController@getourteam',
                'as'=>'our-team'
                ]);
                Route::get('/service',[
                    'uses'=>'SignUpController@getservice',
                    'as'=>'service'
                    ]);
                    Route::get('/service-two-column',[
                        'uses'=>'SignUpController@getservicetwocolumn',
                        'as'=>'service-two-column'
                        ]);
                        Route::get('/projects',[
                            'uses'=>'SignUpController@getprojects',
                            'as'=>'projects'
                            ]);
                            Route::get('/-1',[
                                'uses'=>'SignUpController@getindex01',
                                'as'=>'index-1'
                                ]);
                                Route::get('/contact',[
                                    'uses'=>'SignUpController@getcontact',
                                    'as'=>'contact'
                                    ]);
                                    Route::get('/charity',[
                                        'uses'=>'SignUpController@getcharity',
                                        'as'=>'charity'
                                        ]);
                                    Route::get('/coming-soon',[
                                        'uses'=>'SignUpController@getcommingsoon',
                                        'as'=>'coming-soon'
                                        ]);
                                        Route::get('/service-signle',[
                                            'uses'=>'SignUpController@getservicesignle',
                                            'as'=>'service-signle'
                                            ]);
                                            Route::get('/service-signle02',[
                                                'uses'=>'SignUpController@getservicesignle02',
                                                'as'=>'service-signle02'
                                                ]);
                                        Route::get('/projects-three',[
                                            'uses'=>'SignUpController@getprojectsthree',
                                            'as'=>'projects-three'
                                            ]);
                                            Route::post('/signupnew',[
                                                'uses'=>'SignUpController@postSignUp',
                                                'as'=>'signupnew'
                                            ]);
                                            Route::post('/login',[
                                                'uses'=>'SignUpController@postLogin',
                                                'as'=>'login'
                                            ]);
                                            Route::get('/admin',[
                                                'uses'=>'SignUpController@getadmin',
                                                'as'=>'admin'
                                                ]);
                                                // Route::get('/message',[
                                                //     'uses'=>'SignUpController@getmessage',
                                                //     'as'=>'message'
                                                //     ]);
                                                    Route::get('/message',function(){
                                                        $message=App\Message::all();
                                                        return view('message')->with('messages',$message);
                                                    });

                                                Route::get('/logout',[
                                                    'uses'=>'SignUpController@getLogout',
                                                    'as'=>'logout'
                                                ]);
                                                Route::post('/messagenew',[
                                                    'uses'=>'SignUpController@postmessage',
                                                    'as'=>'messagenew'
                                                ]);
                                                Route::get('/markasapproved/{id}','SignUpController@updateTaskAsCompleted');
                                                Route::get('/markasreject/{id}','SignUpController@updateTaskAsNotCompleted');
});
