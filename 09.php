<?php

/*
09.Routingについて理解する

1.URLとControllerやActionを紐付ける機能を何といいますか？
    Routing


2.あなたが考える、group化をすることのメリットを考えてみてください。
    Routingの設定をControllerごとに一括で設定ができる
    
    
3.「http://XXXXXX.jp/XXX というアクセスが来たときに、 
   AAAControllerのbbbというAction に渡すRoutingの設定」
   を書いてみてください。


    Route::group(['prefix' => 'XXX'],functioon(){
      Route::get('XXX, AAAController@bbb');
    });

別解
    Route::get('XXX', 'AAAController@bbb');


4.【応用】 前章でAdmin/ProfileControllerを作成し、
   add Action, edit Actionを追加しました。web.phpを編集して、
   admin/profile/create にアクセスしたら ProfileController の add Action に、
   admin/profile/edit にアクセスしたら ProfileController の edit Action 
   に割り当てるように設定してください。
   
   Route::group(['prefix' => 'admin'], function(){
      Route::get('profile/create', 'Admin\ProfileController@add');
      Route::get('profile/edit', 'Admin\ProfileController@edit');
    });