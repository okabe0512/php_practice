<?php
/*
課題1 Viewは何をするところでしょうか。簡潔に説明してみてください。
      
      Controllerの指示によって アクセスしてきたユーザーのブラウザに表示するデータを生成するところ


課題2 プログラマーがhtmlを書かずにPHPなどのプログラミング言語やフレームワークを
      使う必要があるのはどういった理由でしょうか。
      
      HTMLでは決まったものを表示するhtmlファイルしか出力できないため、
      ログインしたユーザーごとにWebページにユーザー名を表示したい場合などは、
      Model経由でデータベースからデータを取得し、それをhtmlファイルに記述して
      ユーザーに渡す必要があるため。
    
      
課題3 【応用】 前々章でAdmin/ProfileControllerのadd Action, edit Action に次のように記述しました。
          public function add()
          {
            return view('admin.profile.create');
          }
          
          public function edit()
          {
            return view('admin.profile.edit');
          }
       この場合、add Action と edit Action を描画するには、
       それぞれどこのディレクトリに何というbladeファイルを設置すれば良いでしょうか。
       
       
       resources/views/admin/profileディレクトリ配下にcreate.blade.php
       resources/views/admin/profileディレクトリ配下にedit.blade.php
       
       
          
課題4


*/