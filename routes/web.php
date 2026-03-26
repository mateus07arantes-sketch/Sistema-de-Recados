<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.notices.welcome');
})->name('welcome');

// Controller da dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Controller dos recados
Route::resource('notices', NoticeController::class);

// Rotas para a edição dos recados (urgenetes ou não)

Route::patch('notices/{notice}/urgency', [NoticeController::class, 'markAsUrgency'])->name('notices.urgency');
Route::patch('notices/{notice}/no-urgency', [NoticeController::class, 'markAsNoUrgency'])->name('notices.no-urgency');

// Rota do sobre nós

Route::get('/sobre', function() {
    return view('app.notices.about_us');
})->name('about_us');

// Rota para a página de Cadastro

Route::get('/alunos', function () {
    return view('app.notices.student');
})->name('students.view');

Route::post('/alunos', [UserController::class, 'store'])->name('students.store');

Route::get('/alunos/lista', [UserController::class, 'index'])->name('students.list');