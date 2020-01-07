<?php





    
    Route::name('login')->post('login', 'AdminLoginController@login');
    Route::name('logout')->get('logout', 'AdminLoginController@logout');

    Route::middleware('admin.auth')->group(function() {
            
            Route::name('home.')->prefix('home')->group(function() {
                Route::name('index')->get('index', 'HomeController@index');
            });

           

             

});

?>