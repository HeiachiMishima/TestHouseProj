<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CarousalImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Contactform2Controller;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\ContactlistController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GButtonController;
use App\Http\Controllers\GCardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\Modal1Controller;
use App\Http\Controllers\Modal2Controller;
use App\Http\Controllers\NewsCardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SCardController;
use App\Http\Controllers\SHeadingController;
use App\Http\Controllers\Stats2Controller;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\SubscribelistController;
use App\Http\Controllers\TCardController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'ValidUser:user'])->group(function () {
    Route::get('/House', [HouseController::class, 'index'])->name('House');
});

Route::middleware(['auth', 'ValidUser:admin'])->group(function () {
    Route::get('/AdminPanel', [AdminPanelController::class, 'create'])
        ->name('AdminPanel.dashboard');


    Route::get('/Home', [HomeController::class, 'create'])->name('Home');
    Route::post('/Homestore', [HomeController::class, 'store'])
        ->name('store.Home');
    Route::get('/HomeTable', [HomeController::class, 'Table'])
        ->name('table.Home');
    Route::get('/HomeEdit/{id}', [HomeController::class, 'edit'])
        ->name('edit.Home');
    Route::post('/HomeUpdate/{id}', [HomeController::class, 'update'])
        ->name('update.Home');
    Route::get('/HomeDelete/{id}', [HomeController::class, 'delete'])
        ->name('delete.Home');

    Route::get('/About', [AboutController::class, 'create'])->name('About');
    Route::post('/Aboutstore', [AboutController::class, 'store'])
        ->name('store.About');
    Route::get('/AboutTable', [AboutController::class, 'Table'])
        ->name('table.About');
    Route::get('/AboutEdit/{id}', [AboutController::class, 'edit'])
        ->name('edit.About');
    Route::post('/AboutUpdate/{id}', [AboutController::class, 'update'])
        ->name('update.About');
    Route::get('/AboutDelete/{id}', [AboutController::class, 'delete'])
        ->name('delete.About');



    Route::get('/SHeading', [SHeadingController::class, 'create'])->name('SHeading');
    Route::post('/SHeadingstore', [SHeadingController::class, 'store'])
        ->name('store.SHeading');
    Route::get('/SHeadingTable', [SHeadingController::class, 'Table'])
        ->name('table.SHeading');
    Route::get('/SHeadingEdit/{id}', [SHeadingController::class, 'edit'])
        ->name('edit.SHeading');
    Route::post('/SHeadingUpdate/{id}', [SHeadingController::class, 'update'])
        ->name('update.SHeading');
    Route::get('/SHeadingDelete/{id}', [SHeadingController::class, 'delete'])
        ->name('delete.SHeading');


    Route::get('/SCard', [SCardController::class, 'create'])->name('SCard');
    Route::post('/SCardstore', [SCardController::class, 'store'])
        ->name('store.SCard');
    Route::get('/SCardTable', [SCardController::class, 'Table'])
        ->name('table.SCard');
    Route::get('/SCardEdit/{id}', [SCardController::class, 'edit'])
        ->name('edit.SCard');
    Route::post('/SCardUpdate/{id}', [SCardController::class, 'update'])
        ->name('update.SCard');
    Route::get('/SCardDelete/{id}', [SCardController::class, 'delete'])
        ->name('delete.SCard');


    Route::get('/VideoForm', [VideoController::class, 'create'])->name('Video');
    Route::post('/Videostore', [VideoController::class, 'store'])
        ->name('store.Video');
    Route::get('/VideoTable', [VideoController::class, 'Table'])
        ->name('table.Video');
    Route::get('/VideoEdit/{id}', [VideoController::class, 'edit'])
        ->name('edit.Video');
    Route::post('/VideoUpdate/{id}', [VideoController::class, 'update'])
        ->name('update.Video');
    Route::get('/VideoDelete/{id}', [VideoController::class, 'delete'])
        ->name('delete.Video');


    Route::get('/Modal1', [Modal1Controller::class, 'create'])->name('Modal1');
    Route::post('/Modal1store', [Modal1Controller::class, 'store'])
        ->name('store.Modal1');
    Route::get('/Modal1Table', [Modal1Controller::class, 'Table'])
        ->name('table.Modal1');
    Route::get('/Modal1Edit/{id}', [Modal1Controller::class, 'edit'])
        ->name('edit.Modal1');
    Route::post('/Modal1Update/{id}', [Modal1Controller::class, 'update'])
        ->name('update.Modal1');
    Route::get('/Modal1Delete/{id}', [Modal1Controller::class, 'delete'])
        ->name('delete.Modal1');



    Route::get('/Modal2', [Modal2Controller::class, 'create'])->name('Modal2');
    Route::post('/Modal2store', [Modal2Controller::class, 'store'])
        ->name('store.Modal2');
    Route::get('/Modal2Table', [Modal2Controller::class, 'Table'])
        ->name('table.Modal2');
    Route::get('/Modal2Edit/{id}', [Modal2Controller::class, 'edit'])
        ->name('edit.Modal2');
    Route::post('/Modal2Update/{id}', [Modal2Controller::class, 'update'])
        ->name('update.Modal2');
    Route::get('/Modal2Delete/{id}', [Modal2Controller::class, 'delete'])
        ->name('delete.Modal2');


    Route::get('/Team', [TeamController::class, 'create'])->name('Team');
    Route::post('/Teamstore', [TeamController::class, 'store'])
        ->name('store.Team');
    Route::get('/TeamTable', [TeamController::class, 'Table'])
        ->name('table.Team');
    Route::get('/TeamEdit/{id}', [TeamController::class, 'edit'])
        ->name('edit.Team');
    Route::post('/TeamUpdate/{id}', [TeamController::class, 'update'])
        ->name('update.Team');
    Route::get('/TeamDelete/{id}', [TeamController::class, 'delete'])
        ->name('delete.Team');


    Route::get('/TCard', [TCardController::class, 'create'])->name('TCard');
    Route::post('/TCardstore', [TCardController::class, 'store'])
        ->name('store.TCard');
    Route::get('/TCardTable', [TCardController::class, 'Table'])
        ->name('table.TCard');
    Route::get('/TCardEdit/{id}', [TCardController::class, 'edit'])
        ->name('edit.TCard');
    Route::post('/TCardUpdate/{id}', [TCardController::class, 'update'])
        ->name('update.TCard');
    Route::get('/TCardDelete/{id}', [TCardController::class, 'delete'])
        ->name('delete.TCard');

    Route::get('/Gallery', [GalleryController::class, 'create'])->name('Gallery');
    Route::post('/Gallerystore', [GalleryController::class, 'store'])
        ->name('store.Gallery');
    Route::get('/GalleryTable', [GalleryController::class, 'Table'])
        ->name('table.Gallery');
    Route::get('/GalleryEdit/{id}', [GalleryController::class, 'edit'])
        ->name('edit.Gallery');
    Route::post('/GalleryUpdate/{id}', [GalleryController::class, 'update'])
        ->name('update.Gallery');
    Route::get('/GalleryDelete/{id}', [GalleryController::class, 'delete'])
        ->name('delete.Gallery');



    Route::get('/GButton', [GButtonController::class, 'create'])->name('GButton');
    Route::post('/GButtonstore', [GButtonController::class, 'store'])
        ->name('store.GButton');
    Route::get('/GButtonTable', [GButtonController::class, 'Table'])
        ->name('table.GButton');
    Route::get('/GButtonEdit/{id}', [GButtonController::class, 'edit'])
        ->name('edit.GButton');
    Route::post('/GButtonUpdate/{id}', [GButtonController::class, 'update'])
        ->name('update.GButton');
    Route::get('/GButtonDelete/{id}', [GButtonController::class, 'delete'])
        ->name('delete.GButton');




    Route::get('/GCard', [GCardController::class, 'create'])->name('GCard');
    Route::post('/GCardstore', [GCardController::class, 'store'])
        ->name('store.GCard');
    Route::get('/GCardTable', [GCardController::class, 'Table'])
        ->name('table.GCard');
    Route::get('/GCardEdit/{id}', [GCardController::class, 'edit'])
        ->name('edit.GCard');
    Route::post('/GCardUpdate/{id}', [GCardController::class, 'update'])
        ->name('update.GCard');
    Route::get('/GCardDelete/{id}', [GCardController::class, 'delete'])
        ->name('delete.GCard');



    Route::get('/CarousalImage', [CarousalImageController::class, 'create'])->name('CarousalImage');
    Route::post('/CarousalImagestore', [CarousalImageController::class, 'store'])
        ->name('store.CarousalImage');
    Route::get('/CarousalImageTable', [CarousalImageController::class, 'Table'])
        ->name('table.CarousalImage');
    Route::get('/CarousalImageEdit/{id}', [CarousalImageController::class, 'edit'])
        ->name('edit.CarousalImage');
    Route::post('/CarousalImageUpdate/{id}', [CarousalImageController::class, 'update'])
        ->name('update.CarousalImage');
    Route::get('/CarousalImageDelete/{id}', [CarousalImageController::class, 'delete'])
        ->name('delete.CarousalImage');





    Route::get('/Stats', [StatsController::class, 'create'])->name('Stats');
    Route::post('/Statsstore', [StatsController::class, 'store'])
        ->name('store.Stats');
    Route::get('/StatsTable', [StatsController::class, 'Table'])
        ->name('table.Stats');
    Route::get('/StatsEdit/{id}', [StatsController::class, 'edit'])
        ->name('edit.Stats');
    Route::post('/StatsUpdate/{id}', [StatsController::class, 'update'])
        ->name('update.Stats');
    Route::get('/StatsDelete/{id}', [StatsController::class, 'delete'])
        ->name('delete.Stats');


    Route::get('/Stats2', [Stats2Controller::class, 'create'])->name('Stats2');
    Route::post('/Stats2store', [Stats2Controller::class, 'store'])
        ->name('store.Stats2');
    Route::get('/Stats2Table', [Stats2Controller::class, 'Table'])
        ->name('table.Stats2');
    Route::get('/Stats2Edit/{id}', [Stats2Controller::class, 'edit'])
        ->name('edit.Stats2');
    Route::post('/Stats2Update/{id}', [Stats2Controller::class, 'update'])
        ->name('update.Stats2');
    Route::get('/Stats2Delete/{id}', [Stats2Controller::class, 'delete'])
        ->name('delete.Stats2');



    Route::get('/News', [NewsController::class, 'create'])->name('News');
    Route::post('/Newsstore', [NewsController::class, 'store'])
        ->name('store.News');
    Route::get('/NewsTable', [NewsController::class, 'Table'])
        ->name('table.News');
    Route::get('/NewsEdit/{id}', [NewsController::class, 'edit'])
        ->name('edit.News');
    Route::post('/NewsUpdate/{id}', [NewsController::class, 'update'])
        ->name('update.News');
    Route::get('/NewsDelete/{id}', [NewsController::class, 'delete'])
        ->name('delete.News');




    Route::get('/NewsCard', [NewsCardController::class, 'create'])->name('NewsCard');
    Route::post('/NewsCardstore', [NewsCardController::class, 'store'])
        ->name('store.NewsCard');
    Route::get('/NewsCardTable', [NewsCardController::class, 'Table'])
        ->name('table.NewsCard');
    Route::get('/NewsCardEdit/{id}', [NewsCardController::class, 'edit'])
        ->name('edit.NewsCard');
    Route::post('/NewsCardUpdate/{id}', [NewsCardController::class, 'update'])
        ->name('update.NewsCard');
    Route::get('/NewsCardDelete/{id}', [NewsCardController::class, 'delete'])
        ->name('delete.NewsCard');




    Route::get('/Contact', [ContactController::class, 'create'])->name('Contact');
    Route::post('/Contactstore', [ContactController::class, 'store'])
        ->name('store.Contact');
    Route::get('/ContactTable', [ContactController::class, 'Table'])
        ->name('table.Contact');
    Route::get('/ContactEdit/{id}', [ContactController::class, 'edit'])
        ->name('edit.Contact');
    Route::post('/ContactUpdate/{id}', [ContactController::class, 'update'])
        ->name('update.Contact');
    Route::get('/ContactDelete/{id}', [ContactController::class, 'delete'])
        ->name('delete.Contact');




    Route::get('/Contactform', [ContactformController::class, 'create'])->name('Contactform');
    Route::post('/Contactformstore', [ContactformController::class, 'store'])
        ->name('store.Contactform');
    Route::get('/ContactformTable', [ContactformController::class, 'Table'])
        ->name('table.Contactform');
    Route::get('/ContactformEdit/{id}', [ContactformController::class, 'edit'])
        ->name('edit.Contactform');
    Route::post('/ContactformUpdate/{id}', [ContactformController::class, 'update'])
        ->name('update.Contactform');
    Route::get('/ContactformDelete/{id}', [ContactformController::class, 'delete'])
        ->name('delete.Contactform');



    Route::get('/Contactform2', [Contactform2Controller::class, 'create'])->name('Contactform2');
    Route::post('/Contactform2store', [Contactform2Controller::class, 'store'])
        ->name('store.Contactform2');
    Route::get('/Contactform2Table', [Contactform2Controller::class, 'Table'])
        ->name('table.Contactform2');
    Route::get('/Contactform2Edit/{id}', [Contactform2Controller::class, 'edit'])
        ->name('edit.Contactform2');
    Route::post('/Contactform2Update/{id}', [Contactform2Controller::class, 'update'])
        ->name('update.Contactform2');
    Route::get('/Contactform2Delete/{id}', [Contactform2Controller::class, 'delete'])
        ->name('delete.Contactform2');



    Route::get('/Contactlist', [ContactlistController::class, 'create'])->name('Contactlist');
    Route::post('/Contactliststore', [ContactlistController::class, 'store'])
        ->name('store.Contactlist');
    Route::get('/ContactlistTable', [ContactlistController::class, 'Table'])
        ->name('table.Contactlist');
    Route::get('/ContactlistEdit/{id}', [ContactlistController::class, 'edit'])
        ->name('edit.Contactlist');
    Route::post('/ContactlistUpdate/{id}', [ContactlistController::class, 'update'])
        ->name('update.Contactlist');
    Route::get('/ContactlistDelete/{id}', [ContactlistController::class, 'delete'])
        ->name('delete.Contactlist');





    Route::get('/Map', [MapController::class, 'create'])->name('Map');
    Route::post('/Mapstore', [MapController::class, 'store'])
        ->name('store.Map');
    Route::get('/MapTable', [MapController::class, 'Table'])
        ->name('table.Map');
    Route::get('/MapEdit/{id}', [MapController::class, 'edit'])
        ->name('edit.Map');
    Route::post('/MapUpdate/{id}', [MapController::class, 'update'])
        ->name('update.Map');
    Route::get('/MapDelete/{id}', [MapController::class, 'delete'])
        ->name('delete.Map');




    Route::get('/Subscribelist', [SubscribelistController::class, 'create'])->name('Subscribelist');
    Route::post('/Subscribeliststore', [SubscribelistController::class, 'store'])
        ->name('store.Subscribelist');
    Route::get('/SubscribelistTable', [SubscribelistController::class, 'Table'])
        ->name('table.Subscribelist');
    Route::get('/SubscribelistEdit/{id}', [SubscribelistController::class, 'edit'])
        ->name('edit.Subscribelist');
    Route::post('/SubscribelistUpdate/{id}', [SubscribelistController::class, 'update'])
        ->name('update.Subscribelist');
    Route::get('/SubscribelistDelete/{id}', [SubscribelistController::class, 'delete'])
        ->name('delete.Subscribelist');
});




Route::view('register', 'register')->name('register');
Route::post('/registerSave', [UserController::class, 'registersave'])
    ->name('registerSave');
Route::get('/RegisterTable', [UserController::class, 'Table'])
    ->name('table.register');
Route::get('/RegisterDelete/{id}', [UserController::class, 'delete'])
    ->name('delete.register');
Route::view('login', 'login')->name('login');
Route::post('/loginMatch', [UserController::class, 'loginuser'])
    ->name('loginMatch');
Route::get('/logout', [UserController::class, 'logout'])
    ->name('logout');