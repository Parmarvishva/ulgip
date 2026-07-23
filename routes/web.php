<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AIAssistantController;
use App\Models\Document;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

// ─── Localization ────────────────────────────────────────────────────────────
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'hi', 'gu'])) {
        Session::put('locale', $locale);
    }

    return redirect()->back();
})->name('lang.switch');

// ─── Public Pages ─────────────────────────────────────────────────────────────
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/ai-assistant', [PageController::class, 'aiAssistant'])->name('ai.assistant');
Route::get('/legal-library', [PageController::class, 'legalLibrary'])->name('legal.library');
Route::get('/circulars', [PageController::class, 'circulars'])->name('circulars');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/cyber-alerts', [PageController::class, 'cyberAlerts'])->name('cyber.alerts');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// ✅ PDF Preview Route
Route::get('/document/{document}/preview', function (Document $document) {
    return redirect(Storage::url($document->file_path));
})->name('document.preview');

// ─── Contact Form POST ────────────────────────────────────────────────────────
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// ─── AI Assistant API ─────────────────────────────────────────────────────────
Route::post('/ai-assistant/chat', [AIAssistantController::class, 'chat'])
    ->name('ai.chat')
    ->middleware('web');

// ─── Authenticated Pages ──────────────────────────────────────────────────────
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/settings', [PageController::class, 'settings'])->name('settings');
});

// ─── Profile ──────────────────────────────────────────────────────────────────
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';