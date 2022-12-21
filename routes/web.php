<?php

use App\calculateAgeClass;
use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ArticalConntroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\SingleActionController;


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


/* Route Example*/
// Route::get('/"{name}', function ($name) {
//     return view('welcome', ['name' => $name]);
// });


// Route::get('/about', function () {
//     return view('about');
// });
// Route::view("contact", 'contact');

// Controller Route

/*Route::get('/', function () {
    return view('welcome');
});
*/

//Routing Parameter
/*
Route::get('about/{name?}', function ($name = null) {
    return "Name is:".$name;
});

Route::get(
    '/contact/{id}',
    function ($id) {
        return "id number is : " . $id;
    }
);
*/

//naming route
/*Route::get('about', array('as' => 'ab', function () {
    $url = route('ab');
    return "The url is : " . $url;
}));
*/


//controller route
/*(Route::get('/list', [Product::class, 'productlist']);
Route::get('/add/{id}', [Product::class, 'addproduct']);
Route::get('/update', [Product::class, 'updateproduct']);
*/

//controller group route
/*Route::controller(Product::class)->group(function () {
    Route::get('/list', 'productlist');
    Route::get('/add/{id}', 'addproduct');
    Route::get('/update',  'updateproduct');
});
*/

//Resource Controller
//Route::resource('user', UserController::class);

//Passing Data in controller
//Route::get('/details', [Product::class, 'display']);

//Passing Data in View
//Route::get('/data', [Product::class, 'display1']);

//pass id in view
//Route::get('/dnum/{id}', [Product::class, 'display2']);

//Route::get('/dtl/{name}', [Product::class, 'display4']);

//Check age in controller
//Route::get('/check/{age}', [Product::class, 'checkAge']);

//Single Action Controller
//Route::get('/courses', SingleActionController::class);

//Route::get('/bld', [Product::class, 'bladex']);

//Route::get('/abt/{id}/{name} ', [Product::class, 'display3']);
// Route::get('/abt/{id}', function () {
//     return view('about');
// });

//Database connection
// Route::get('/dbconn', function () {
//     return view("dbconn");
// });


//Route::get('/', [PostController::class, 'index']);

//endpoint
//Route::get('/post', [PostController::class, 'index']);

//Eloquent ORM
// Route::resource('/cars', CarController::class);

// Route::get('/abc', [CarController::class, 'index']);


//Query Buider
//Route::get('list', [MemberController::class, 'dbOperation']);


//service controller
//Route::get('/posts/{post}', [PostController::class, 'show']);

//Route::get('simple', [SimpleController::class, 'show']);

//binging method service container for age calculate(simple binding)

/*app()->bind('ageCalculate', function () {
    return new \App\calculateAgeClass();
});


Route::get('/', function (calculateAgeClass $calculateAgeClass) {
    $calculateAgeClass->provide_birth_year(2010);
    $age = $calculateAgeClass->get_age();
    return $age;
});
*/

//Binding Using Instance


//using Instance
/*app()->instance('Game', function () {
    return 'Instance';
});
dd(app());
dd(resolve('Game'));
*/

//using Bind
/*app()->bind('Game', function () {
    return 'cricket';
});

dd(app()->make('Game'));
//return app()->make('Game');
*/

//random using bind
// app()->bind('random', function () {
//     return Str::random();
// });
// dump(app()->make('random'));
// dd(app()->make('random'));

//singleton binding
/*app()->singleton('random', function () {
    return Str::random();
});
dump(app()->make('random'));
dd(app()->make('random'));
*/


//Eloquent ORM
//Route::get('/', [StudentController::class, 'show']);
//Eloquent ORM -CRUD Operation
// Route::get('/', [PracticeController::class, 'index'])->name('index');
// Route::post('create', [PracticeController::class, 'create'])->name('create');
// Route::get('edit/{id}', [PracticeController::class, 'edit'])->name('edit');
// Route::put('update/{id}', [PracticeController::class, 'update'])->name('update');
// Route::get('delete/{id}', [PracticeController::class, 'destroy'])->name('destroy');
// //cursor
//Route::get('/', [StudentController::class, 'operation']);

//Soft & Hard Delete
// Route::get('/', [ArticalConntroller::class, 'artical']);
// Route::get('/softDelete/{id}', [ArticalConntroller::class, 'softDelete']);
// Route::get('/hardDelete/{id}', [ArticalConntroller::class, 'hardDelete']);
// Route::get('/trashed', [ArticalConntroller::class, 'trashed']);
// Route::get('/restore/{id}', [ArticalConntroller::class, 'restore']);
// Route::get('/restoreAll', [ArticalConntroller::class, 'restoreAll']);
//Route::get('/index', [ArticalConntroller::class, 'index']);

//Route::get('/', [SimpleController::class, 'index']);

//relationship
// Route::get('list', [CustomerController::class, 'list']);


//hasOneThought-realtionship
// Route::get('/', [MechanicController::class, 'show']);
// Route::get('/owner', [OwnerController::class, 'show2']);
// Route::get('/bike', [MechanicController::class, 'show1']);
Route::get('/', [SongController::class, 'show3']);
Route::get('/addsong', [SongController::class, 'addSong']);
Route::get('/addsinger', [SingerController::class, 'addSinger']);
