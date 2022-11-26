<?php
//ファイル名の把握
$file_name = __file__;

//ファイルのopen
$file_obj = new SplFileObject($file_name);

//各行を読み込んで出力する各行を読み込んで出力する
foreach($file_obj as $no => $line) {
    echo "{no}: $line";
}
