<?php

use Illuminate\Support\Facades\Route;

Route::get('/one', function () { return view('pages.one');})->name('one');
Route::get('/hero', function () { return view('components.hero');})->name('hero');
Route::get('/home', function () { return view('pages.home');})->name('home');
Route::get('/dashboard', function () { return view('pages.dashboard');})->name('dashboard');
Route::get('/contact', function () { return view('pages.contact');})->name('contact');
Route::get('/vendors', function () { return view('pages.vendors');})->name('vendors');
Route::get('/services', function () { return view('pages.services');})->name('services');
Route::get('/about', function () { return view('pages.about');})->name('about');
Route::get('/home1', function () { return view('pages.home1');})->name('home1');
Route::get('/home2', function () { return view('pages.home2');})->name('home2');
Route::get('/home3', function () { return view('pages.home3');})->name('home3');
Route::get('/home4', function () { return view('pages.home4');})->name('home4');
Route::get('/home5', function () { return view('pages.home5');})->name('home5');