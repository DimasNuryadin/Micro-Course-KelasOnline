<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ImageCourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MyCourseController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Mentor
Route::get('/mentors', [MentorController::class, 'index']);
Route::get('/mentors/{id}', [MentorController::class, 'show']);
Route::post('/mentors', [MentorController::class, 'create']);
Route::put('/mentors/{id}', [MentorController::class, 'update']);
Route::delete('/mentors/{id}', [MentorController::class, 'destroy']);

// Course
Route::post('/courses', [CourseController::class, 'create']);
Route::put('/courses/{id}', [CourseController::class, 'update']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);
Route::delete('/courses/{id}', [CourseController::class, 'destroy']);

// Chapter
Route::post('/chapters', [ChapterController::class, 'create']);
Route::put('/chapters/{id}', [ChapterController::class, 'update']);
Route::get('/chapters', [ChapterController::class, 'index']);
Route::get('/chapters/{id}', [ChapterController::class, 'show']);
Route::delete('/chapters/{id}', [ChapterController::class, 'destroy']);

// Lesson
Route::post('/lessons', [LessonController::class, 'create']);
Route::put('/lessons/{id}', [LessonController::class, 'update']);
Route::get('/lessons', [LessonController::class, 'index']);
Route::get('/lessons/{id}', [LessonController::class, 'show']);
Route::delete('/lessons/{id}', [LessonController::class, 'destroy']);

// Image Course
Route::post('/image-courses', [ImageCourseController::class, 'create']);
Route::delete('/image-courses/{id}', [ImageCourseController::class, 'destroy']);

// My Courses
Route::post('/my-courses', [MyCourseController::class, 'create']);
Route::get('/my-courses', [MyCourseController::class, 'index']);
Route::post('/my-courses/premium', [MyCourseController::class, 'createPremiumAccess']);

// Review
Route::post('/reviews', [ReviewController::class, 'create']);
Route::put('/reviews/{id}', [ReviewController::class, 'update']);
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);
