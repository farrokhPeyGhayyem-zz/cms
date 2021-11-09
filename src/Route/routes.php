<?php
namespace Farrokh\Cms;
use Farrokh\Cms\Http\Controller\AdminPanelController;
use Illuminate\Support\Facades\Route;

\Illuminate\Support\Facades\Route::get('adminpannel/index',function (){
   return 'adminpannel';
});
Route::get('adminpanel/index',[AdminPanelController::class,'index']);
