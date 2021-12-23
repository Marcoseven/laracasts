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

Route::get('/', function () {
    return view('home');
})->name('home');

/* route_#site_header */
/* route_.buttons_jumbo */
Route::get('/discussion', function () {
    return view('home.buttons.discussion');
})->name('discussion');
/* /route_.buttons_jumbo */
/* /route_#site_header */

/* route_#site_main */
/* /route_#site_main */

/* route_#site_footer */
/* route_.learn_menu */
Route::get('/sign_up', function () {
    return view('menu_footer.learn.sign_up');
})->name('sign_up');

Route::get('/sign_in', function () {
    return view('menu_footer.learn.sign_in');
})->name('sign_in');

Route::get('/series', function () {
    return view('menu_footer.learn.series');
})->name('series');

Route::get('/larabits', function () {
    return view('menu_footer.learn.larabits');
})->name('larabits');

Route::get('/topics', function () {
    return view('menu_footer.learn.topics');
})->name('topics');

Route::get("/what's_new", function () {
    return view("menu_footer.learn.what's_new");
})->name("what's_new");

Route::get('/search', function () {
    return view('menu_footer.learn.search');
})->name('search');

Route::get('/commercial', function () {
    return view('menu_footer.learn.commercial');
})->name('commercial');
/* /route_.learn_menu */

/* route_.discuss_menu */
Route::get('/forum', function () {
    return view('menu_footer.discuss.forum');
})->name('forum');

Route::get("/podcast", function () {
    return view("menu_footer.discuss.podcast");
})->name("podcast");

Route::get('/blog', function () {
    return view('menu_footer.discuss.blog');
})->name('blog');

Route::get('/support', function () {
    return view('menu_footer.discuss.support');
})->name('support');
/* /route_.discuss_menu */

/* route_.extras_menu */
Route::get('/gift_certificates', function () {
    return view('menu_footer.extras.gift_certificates');
})->name('gift_certificates');

Route::get('/teams', function () {
    return view('menu_footer.extras.teams');
})->name('teams');

Route::get('/faq', function () {
    return view('menu_footer.extras.faq');
})->name('faq');

Route::get('/assets', function () {
    return view('menu_footer.extras.assets');
})->name('assets');

Route::get('/get_a_job', function () {
    return view('menu_footer.extras.get_a_job');
})->name('get_a_job');

Route::get('/privacy', function () {
    return view('menu_footer.extras.privacy');
})->name('privacy');

Route::get("/terms", function () {
    return view("menu_footer.extras.terms");
})->name("terms");
/* /route_.extras_menu */
/* /route_#site_footer */
