<?php

use App\Models\Photo;
use App\Models\Mutator;
use App\calculateAgeClass;
use App\Jobs\sendEmailJob;
use App\Mail\SendMailDemo;
use Illuminate\Http\Request;
use App\Http\Controllers\Product;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MutatorController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ArticalConntroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\RegistrationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


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
// Route::get('list', [MemberController::class, 'dbOperation']);
// Route::get('insert', [MemberController::class, 'dbInsert']);
// Route::get('update', [MemberController::class, 'dbUpdate']);
// Route::get('delete', [MemberController::class, 'dbDelete']);

//Query Builder Using view
//Route::get('show', [MemberController::class, 'show']);

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

//cursor
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

//relationship-one to one
// Route::get('list', [CustomerController::class, 'list']);


//hasOneThought-realtionship-hasManyThrought
// Route::get('/owner', [MechanicController::class, 'showOwner']); //hasOneThrough
// Route::get('/', [OwnerController::class, 'show2']); //belongTo
// Route::get('/bike', [MechanicController::class, 'showBike']);//hasManyThrough

//many to many relationship
// Route::get('/showsong', [SongController::class, 'show3']);
// Route::get('/addsong', [SongController::class, 'addSong']);
// Route::get('/addsinger', [SingerController::class, 'addSinger']);
// Route::get('/showsinger/{id}', [SingerController::class, 'showSinger']);


//one to many-Polymophic relation
// Route::get('showphoto', [PhotoController::class, 'showPhoto']);
// Route::get('addphoto', [PhotoController::class, 'addPhoto']);
// Route::get('/showvideo', [VideoController::class, 'showVideo']);
// Route::get('/addvideo', [VideoController::class, 'addVideo']);
//Route::get('/', [CommentController::class]);

//one to one -Polymorphic
// Route::get('addphoto', [PhotoController::class, 'addPhoto1']);
// Route::get('showphoto', [PhotoController::class, 'showPhoto1']);
// Route::get('addperson', [PersonController::class, 'addPerson']);
//


//many to many-polymorphic
// Route::get('showphoto', [TagController::class, 'showPhoto']);
// Route::get('tagphoto', [PhotoController::class, 'photoTag']);
// Route::get('addtagphoto', [TagController::class, 'addTagphoto']);
// Route::get('tagvideo', [VideoController::class, 'videoTag']);
// Route::get('showvideo', [TagController::class, 'showVideo']);
// Route::get('addtagvideo', [TagController::class, 'addTagvideo']);


//Accessor
// Route::get('/accessor', [MutatorController::class, 'index']);
// Route::get('/mutator', [MutatorController::class, 'show']);
// Route::get('/json', [MutatorController::class, 'json']);
// $post = Mutator::find(5);
// dd($post->is_active);

//validation with crud operations
/*Group Route*/

// Route::controller(RegistrationController::class)->group(function () {
//     Route::get('/',  'index')->name('index');
//     Route::post('register',  'register')->name('register');
//     Route::get('edit/{id}', 'edit');
//     Route::put('update/{id}',  'update')->name('update');
//     Route::get('delete/{id}', 'destroy');
// });

/*single Route*/

// Route::get('/', [RegistrationController::class, 'index'])->name('index');
// Route::post('register', [RegistrationController::class, 'register'])->name('register');
// Route::get('edit/{id}', [RegistrationController::class, 'edit']);
// Route::put('update/{id}', [RegistrationController::class, 'update'])->name('update');
// Route::get('delete/{id}', [RegistrationController::class, 'destroy']);


//Middleware-global
// Route::get('/', function () {
//     return view('middleware.home');
// });

// Route::get('dashboard', function () {
//     return view('middleware.dashboard');
// });

// Route::get('contact', function () {
//     return view('middleware.contact ');
// });

// Route::get('report', [ReportController::class, 'show']);


//middleware-route
// Route::get('/', function () {
//     return view('middleware.home');
// });

// Route::get('dashboard', function () {
//     return view('middleware.dashboard');
// });

// Route::get('contact', function () {
//     return view('middleware.contact ');
// })->middleware('construction');

// Route::get('report', [ReportController::class, 'show']);


//middleware-group
// Route::get('/', function () {
//     return view('middleware.home');
// });
// Route::get('dashboard', function () {
//     return view('middleware.dashboard');
// });
// Route::get('contact', function () {
//     return view('middleware.contact ');
// })->middleware('construction');
// Route::get('report', [ReportController::class, 'show']);

//goupe middleware with goupe route
// Route::middleware(['construction:admin'])->group(function () {
//     Route::get('dashboard', function () {
//         return view('middleware.dashboard');
//     })->withoutmiddleware(['construction:admin']);
// });

//statuc check a request in middleware
// Route::get('dashboard', function () {
//     return view('middleware.dashboard');
// })->middleware(['construction:admin']);

// Route::get('contact', function () {
//     return view('middleware.contact ');
// });
// Route::get('/', function () {
//     return view('middleware.home');
// });
// Route::get('report', [ReportController::class, 'show']);


//Request Method
// Route::get('/', [RequestController::class, 'practice']);
// Route::get('profile', function (Request $request) {
//     dd($request);
// });
// Route::get('index/{id}', [RequestController::class, 'index']);
// Route::get('/admin/one', [RequestController::class, 'check']);
// Route::get('/guest/one', [RequestController::class, 'check']);

//Response Method

// Route::get('response', [ResponseController::class, 'response']);

//Mail & Notification
// Route::get('email', [HomeController::class, 'email']);
// Route::get('send-notification/{id}', [HomeController::class, 'sendOfferNotification']);
// Route::get('send-email', [MailController::class, 'sendEmail']);


//job-Queue
//static
// Route::get('mail', function () {
//     $userMail = 'nehav@zignuts.com';
//     dispatch(new sendEmailJob($userMail));
//     dd('Send Mail Successfully..!!');
// });

//Dynamic
// Route::get('sendJob/{mail}', [HomeController::class, 'sendJob']);
