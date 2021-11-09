<?php


namespace Farrokh\Cms\Http\Controller;


use App\Http\Controllers\Controller;
use Farrokh\Cms\Models\Admin;

class AdminPanelController extends  Controller
{
    public  function  index()
    {
        return Admin::create(['username'=>'mamal']);
    }
}
