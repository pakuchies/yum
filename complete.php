<?php
/*
ファイルパス
C:\xampp\htdocs\member\complete.php
ファイル名
complete.php
アクセスURL  test
http://localhost/member/complete.class.php
*/

    require_once( 'c:\xampp\htdocs\smarty\libs\Smarty.class.php' );

    $smarty = new Smarty();

    // テンプレート指定
    $smarty->template_dir = '../templates/member';
    $smarty->compile_dir  = '../templates_c/member';



    $smarty->display( 'complete.tpl' );
