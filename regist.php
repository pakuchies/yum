<?php
/*
ファイルパス
C:\xampp\htdocs\member\regist.php
ファイル名
regist.php
アクセスURL
http://localhost/member/regist.php
 */

require_once( 'c:\xampp\htdocs\smarty\libs\Smarty.class.php' );
require_once( 'initMaster.class.php' );

$smarty = new Smarty();

// テンプレート指定
$smarty->template_dir = '../templates/member';
$smarty->compile_dir  = '../templates_c/member';

// 初期データを設定
$dataArr  = array(
    'family_name'      => '',
    'first_name'       => '',
    'family_name_kana' => '',
    'first_name_kana'  => '',
    'sex'              => '',
    'year'             => '',
    'month'            => '',
    'day'              => '',
    'zip1'             => '',
    'zip2'             => '',
    'address'          => '',
    'email'            => '',
    'tel1'             => '',
    'tel2'             => '',
    'tel3'             => '',
    'traffic'          => '',
    'contents'         => ''
);

//エラーメッセージの定義、初期
$errArr = array();
foreach( $dataArr as $key => $value ) {
    $errArr[$key] = '';
}

// array($yearArr,$monthArr,$dayArr)
////静的クラス
list( $yearArr,$monthArr, $dayArr) = initMaster::getDate();
$sexArr = initMaster::getSex();
$trafficArr = initMaster::getTrafficWay();

$smarty->assign( "yearArr" , $yearArr);
$smarty->assign( "monthArr", $monthArr);
$smarty->assign( "dayArr"  , $dayArr);
$smarty->assign( 'sexArr', $sexArr);
$smarty->assign( 'trafficArr', $trafficArr);

$smarty->assign( 'selectYear'  , date("Y"));
$smarty->assign( 'selectMonth' , date("m"));
$smarty->assign( 'selectDay'   , date("d"));
$smarty->assign( 'selectSex'   , '');
$smarty->assign( 'selectTraffic', array());


$smarty->assign( "dataArr", $dataArr );
$smarty->assign( "errArr",  $errArr );
$smarty->display( 'regist.tpl' );
