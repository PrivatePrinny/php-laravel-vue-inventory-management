<?php
 
Route::resource('category',App\Http\Controllers\CategoryController::class)->only(['index','store','show','update','destroy']);