<?php
//ファイルの読み込み
require_once( __dir__ . "/WEBCAMP_Log.php" );

//「名前空間付き」のクラスを使う (完全修飾名)
$obj = new \WEBCAMP\Log();
$obj->test();
