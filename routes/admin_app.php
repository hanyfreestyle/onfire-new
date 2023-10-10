<?php

use App\Http\Controllers\admin\app\AppSettingController;
use App\Http\Controllers\admin\config\DefPhotoController;
use App\Http\Controllers\admin\config\LangFileController;
use App\Http\Controllers\admin\config\LangFileWebController;

use App\Http\Controllers\admin\config\SettingsController;
use App\Http\Controllers\admin\config\UploadFilterController;
use App\Http\Controllers\admin\config\UploadFilterSizeController;
use App\Http\Controllers\admin\config\WebPrivacyController;
use Illuminate\Support\Facades\Route;


Route::get('/app/Setting/setting', [AppSettingController::class, 'AppSetting'])->name('App.AppSetting.form');
Route::post('/app/Setting/settingUpdate', [AppSettingController::class, 'AppSettingUpdate'])->name('App.AppSetting.AppSettingUpdate');


//
//Route::post('/config/model/update', [SettingsController::class, 'webConfigModelUpdate'])->name('config.model.update');
//
//Route::post('/config/webConfigUpdate', [SettingsController::class, 'webConfigUpdate'])->name('admin.webConfigUpdate');
//Route::get('/config/show', [SettingsController::class,'defIconShow'])->name('config.defIcon.show');
//

