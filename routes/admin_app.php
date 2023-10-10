<?php

use App\Http\Controllers\admin\app\AppSettingController;
use Illuminate\Support\Facades\Route;


Route::get('/app/Setting/setting', [AppSettingController::class, 'AppSetting'])->name('App.AppSetting.form');
Route::post('/app/Setting/settingUpdate', [AppSettingController::class, 'AppSettingUpdate'])->name('App.AppSetting.AppSettingUpdate');

Route::get('/app/Setting/photo', [AppSettingController::class, 'AppPhotos'])->name('App.AppPhotos.form');
Route::get('/app/Setting/MenuList', [AppSettingController::class, 'AppPhotos'])->name('App.AppPhotosssss.form');


