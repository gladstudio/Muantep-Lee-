<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About | Muantap Lee!',
        'navbars' => [
            'title' => 'About Us',
            'list1' => 'Home',
            'list2' => 'Pages',
            'list3' => 'About',
        ]
    ]);
});


Route::get('/service', function () {
    return view('pages.service', [
        'title' => 'Service | Muantap Lee!',
        'navbars' => [
            'title' => 'Service',
            'list1' => 'Home',
            'list2' => 'Pages',
            'list3' => 'Service',
        ]
    ]);
});

Route::get('/menu', function () {
    return view('pages.menu', [
        'title' => 'Menu | Muantap Lee!',
        'navbars' => [
            'title' => 'Menu',
            'list1' => 'Home',
            'list2' => 'Pages',
            'list3' => 'Menu',
        ]
    ]);
});

Route::get('/booking', function () {
    return view('pages.booking', [
        'title' => 'Booking | Muantap Lee!',
        'navbars' => [
            'title' => 'Booking',
            'list1' => 'Home',
            'list2' => 'Pages',
            'list3' => 'Booking',
        ]
    ]);
});

Route::get('/team', function () {
    return view('pages.team', [
        'title' => 'Our Team | Muantap Lee!',
        'navbars' => [
            'title' => 'Our Team',
            'list1' => 'Home',
            'list2' => 'Pages',
            'list3' => 'Our Team',
        ]
    ]);
});

Route::get('/testimonial', function () {
    return view('pages.testimonial', [
        'title' => 'Testimonial | Muantap Lee!',
        'navbars' => [
            'title' => 'Testimonial',
            'list1' => 'Home',
            'list2' => 'Pages',
            'list3' => 'Testimonial',
        ]
    ]);
});

Route::get('/contact', function () {
    return view('pages.contact', [
        'title' => 'Contact | Muantap Lee!',
        'navbars' => [
            'title' => 'Contact',
            'list1' => 'Home',
            'list2' => 'Pages',
            'list3' => 'Contact',
        ]
    ]);
});
