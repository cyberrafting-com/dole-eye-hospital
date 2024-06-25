<?php       

// use App\Http\Controllers\TodoListController;
use App\Http\Controllers\ContactController;
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

Route::get('/clear',function(){
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-doctor', function () {
    return view('about');
})->name('about');

Route::get('/hospital-gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

// surgeries grouping
Route::group(['prefix' => "surgeries"], function () {

    Route::get('/cataract-surgery', function () {
        return view('surgeries.cataract-surgery'); 
    })->name('cataract-surgery');        

    Route::get('/canaloplasty', function () {  
        return view('surgeries.canaloplasty');  
    })->name('canaloplasty');    

    Route::get('/lasik-eye-surgery', function () {  
        return view('surgeries.lasik-eye-surgery');  
    })->name('lasik-eye-surgery');    

    Route::get('/corneal-surgery', function () {  
        return view('surgeries.corneal-surgery');  
    })->name('corneal-surgery');   

    Route::get('/squint-surgery', function () {  
        return view('surgeries.squint-surgery');  
    })->name('squint-surgery');  
    
    Route::get('/oculoplastic-surgery', function () {  
        return view('surgeries.oculoplastic-surgery');  
    })->name('oculoplastic-surgery'); 

    Route::get('/anterior-segment-surgery', function () {  
        return view('surgeries.anterior-segment-surgery');  
    })->name('anterior-segment-surgery'); 

});

//serices grouping
Route::group(['prefix' => "services"], function () {

    Route::get('/basic-eye-check-up', function () {
        return view('services.basic-eye-check-up'); 
    })->name('basic-eye-check-up');

    Route::get('/retina-examination', function () {
        return view('services.retina-examination'); 
    })->name('retina-examination');  
    
    Route::get('/glaucoma-treatment', function () {
        return view('services.glaucoma-treatment'); 
    })->name('glaucoma-treatment');   
    
    Route::get('/lazy-eye-treatment', function () {
        return view('services.lazy-eye-treatment'); 
    })->name('lazy-eye-treatment'); 

    Route::get('/pediatric-glaucoma-management', function () {
        return view('services.pediatric-glaucoma-management'); 
    })->name('pediatric-glaucoma-management');   

    Route::get('/diabetic-retina-treatment', function () {
        return view('services.diabetic-retina-treatment'); 
    })->name('diabetic-retina-treatment'); 

});            


// db code
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');

Route::post('/stud_create', function () {
    return view('stud_create');
})->name('stud_create');   


Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

//Testimonials route
  