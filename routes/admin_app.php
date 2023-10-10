<?php

use App\Http\Controllers\admin\app\AppSettingController;
use App\Http\Controllers\admin\app\OpeningHoursController;
use Illuminate\Support\Facades\Route;


Route::get('/app/Setting/setting', [AppSettingController::class, 'AppSetting'])->name('App.AppSetting.form');
Route::post('/app/Setting/settingUpdate', [AppSettingController::class, 'AppSettingUpdate'])->name('App.AppSetting.AppSettingUpdate');
Route::get('/app/Setting/photo', [AppSettingController::class, 'AppPhotos'])->name('App.AppPhotos.form');



Route::get('/app/Setting/profile', [AppSettingController::class, 'AppProfile'])->name('App.AppProfile.form');
Route::get('/app/Setting/cart', [AppSettingController::class, 'AppCart'])->name('App.AppCart.form');
Route::post('/app/Setting/profileUpdate', [AppSettingController::class, 'AppProfileUpdate'])->name('App.AppProfileUpdate');


Route::get('/app/MenuList', [AppSettingController::class, 'AppMenuList'])->name('App.AppMenuList.index');
Route::get('/app/Menu/create',[AppSettingController::class,'create'])->name('App.AppMenuList.create');
Route::get('/app/Menu/edit/{id}',[AppSettingController::class,'edit'])->name('App.AppMenuList.edit');
Route::get('/app/Menu/destroy/{id}',[AppSettingController::class,'destroy'])->name('App.AppMenuList.destroy');
Route::post('/app/Menu/update/{id}',[AppSettingController::class,'storeUpdate'])->name('App.AppMenuList.update');
Route::get('/app/Menu/Sort',[AppSettingController::class,'Sort'])->name('App.AppMenuList.Sort');
Route::post('/app/Menu/SaveSort',[AppSettingController::class,'SaveSort'])->name('App.AppMenuList.SaveSort');


Route::get('/app/OpeningHours', [OpeningHoursController::class, 'OpeningHours'])->name('App.OpeningHours.form');
Route::post('/app/OpeningHoursUpdate/{id}', [OpeningHoursController::class, 'OpeningHoursUpdate'])->name('App.OpeningHours.Update');
