<?php

namespace App\Http\Controllers\admin\app;

use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\app\AppSettingRequest;
use App\Models\admin\app\AppSetting;
use App\Models\admin\config\Setting;
use Illuminate\Http\Request;

class AppSettingController extends AdminMainController
{

    function __construct()
    {
        parent::__construct();
        $this->middleware('permission:AppSetting_config', ['only' => ['AppSetting']]);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function AppSetting()
    {
        $setting = AppSetting::findOrFail(1);
        $pageData =[
            'ViewType'=>"Page",
            'TitlePage'=>__('admin/menu.setting_web'),
        ];
        return view('admin.app.setting_form')->with(compact('pageData','setting'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function AppSettingUpdate(AppSettingRequest $request)
    {
        if(isset($request->status)){
            $request['status'] = '1';
        }else{
            $request['status'] = '0';
        }
        $setting = AppSetting::findOrFail(1);
        $setting->status = $request->input('status');
        $setting->save();
        $setting->update($request->all());
       return redirect()->back();
    }

}
