<?php

// var_dump($_POST);
//  exit();

 $title=$_POST["title"];
 $date=$_POST["date"];
 $contents=$_POST["contents"];

 //txtdataへの書き込み
 $write_data="記入日：{$date}<br>タイトル：{$title}<br>内容<br>{$contents}<br><br>\n";
 $file=fopen("data/diary.txt","a");
 flock($file, LOCK_EX);

 fwrite($file, $write_data);

 flock($file,LOCK_UN);
 fclose($file);

//csvへの書き込み
 $write_data2="記入日：{$date}<br>タイトル：{$title}<br>内容<br>{$contents}<br><br>,\n";
 $file2=fopen("data/diary.csv","a");
 flock($file2, LOCK_EX);

 fwrite($file2, $write_data2);

 flock($file2,LOCK_UN);
 fclose($file2);



 header("location:diary_input.php");
