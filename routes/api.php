<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\DashboardController;
use App\Http\Controllers\Api\V1\Teacher\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherApplicationController;
use App\Http\Controllers\TeacherApprovementController;

use App\Http\Controllers\StudentAccountApplicationController;
use App\Http\Controllers\StudentApprovementController;

Route::post('/v1/teacher-applications', [TeacherApplicationController::class, 'store']);
Route::post('/v1/teacher-applications/{id}/approve',[TeacherApprovementController::class, 'approve']);
// Route::middleware(['auth:sanctum', 'admin'])->group(function () {Route::post('/teacher-applications/{id}/approve',[ApprovementController::class, 'approve'] );});

Route::post('/v1/teacher/student-applications',[StudentAccountApplicationController::class, 'store']);
Route::post('/v1/teacher/student-applications/{id}/approve',[StudentApprovementController::class, 'approve']);

