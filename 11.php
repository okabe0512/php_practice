<?php
/*
課題1 Bladeテンプレートで、埋め込みたい箇所に利用するワードは何だったでしょうか？
        blade.php

課題2 Webpackで使われているBootstrapやSCSSはどういったものか、
      調べられる範囲で調べてみましょう。
        Bootstrap
         CSSのフレームワーク。通常CSSを書く場合、全てのスタイルを自分で作っていく必要がありますが、
         このフレームワークにはよく使われるスタイルがあらかじめ定義してあるため、
         ルールに沿って利用するだけで整ったデザインのページの作成が可能。
        
        SCSS
         Sass(CSSの拡張したメタ言語。CSSのすべてのバージョンと完全に互換性があり、
         シームレスに利用可能な任意のCSSライブラリも豊富。コーディングを簡略化できる。)
         の機能をCSS3文法と互換性がある形で再実装したもの。CSSと書き方が似ているため、
         マークアップエンジニアには導入しやすい。
         
課題3 resources/views/layouts/admin.blade.php をコピーして profile.blade.php を同じディレクトリ（resources/views/layouts）に作成しましょう。
      また、以下の部分を下のように修正しましょう。
      
      　{{-- 次の1行を削除 --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        {{-- 次の1行を追記 --}}
        <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">

課題4 プロフィール作成画面用に、resources/views/admin/profile/create.blade.php ファイルを作成し、
      3.で作成した profile.blade.phpファイルを読み込み、また プロフィールのページであることがわかるように titleとcontentを編集しましょう。
      （ヒント: resources/views/admin/news/create.blade.php を参考にします。）
      
課題5 resources/sass/admin.scss をコピーして profile.scss をresources/sassに作成しましょう。
      後ほどこちらは課題で編集します
      
課題6 webpack.mix.jsを編集して、profile.scss をコンパイルするように編集してみましょう。

課題7 6.ができたら、実際に npm run watch コマンドでコンパイルしてみましょう。

課題8 7.ができたら、ブラウザで /admin/profile/createでプロフィール作成画面が表示されるか確認しましょう。


課題3~5
https://gyazo.com/957d078c50d3029ffd4fd3273582619a
課題6~8
https://gyazo.com/9dfdefaa7a398379591876071f4c0a88


*/