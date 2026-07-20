<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('/summer-training-comparison', 'pages.summer-training');
Route::view('/internship-comparison', 'pages.internship');
Route::view('/industrial-training-comparison', 'pages.industrial-training');
Route::view('/apprenticeship-comparison', 'pages.apprenticeship');
Route::view('/company-overview', 'pages.company-overview');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::view('/privacy-policy', 'pages.privacy-policy');
Route::view('/terms-and-conditions', 'pages.terms-and-conditions');
Route::view('/disclaimer', 'pages.disclaimer');
Route::view('/faq', 'pages.faq');
Route::view('/professional-courses-comparison', 'pages.professional-courses');
Route::view('/career-programs-comparison', 'pages.career-programs');

// Dedicated Course & Training Comparisons
Route::view('/python-training-comparison', 'pages.python-training');
Route::view('/mern-stack-comparison', 'pages.mern-stack');
Route::view('/web-development-training', 'pages.web-development');
Route::view('/mobile-development-training', 'pages.mobile-development');
Route::view('/data-science-training', 'pages.data-science');
Route::view('/cloud-computing-training', 'pages.cloud-computing');
Route::view('/digital-marketing-training', 'pages.digital-marketing');
Route::view('/ui-ux-design-training', 'pages.ui-ux-design');

// Dynamic Blog Routes powered by BlogController (API Integration)
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
