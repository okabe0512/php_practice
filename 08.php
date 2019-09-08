<?php

/*
08.ControllerとRoutingの関係について理解しよう

2.Controllerの役割について、説明してください。
3.ControllerとRoutingの役割について、説明してください。

ControllerはModelとViewの橋渡しをする存在。
主に２つの役割を持っている。
・Routingから受け取った情報をModelに処理をお願いする。
・Modelから受け取った情報をViewに表示する。
*/

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        return radirect('admin/profile/create');
    }
    
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
        return radirect('admin/profile/edit');
    }
}