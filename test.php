<?php
//test1111
$server=[
	    '192.168.80.111',
	        '192.168.80.112'
	];
foreach ($server as $k=>$v){
	    $cmd='ssh '.$v.'" cd /www/test && git clone git@github.com:wangadd/test.git"';
	    //    echo $cmd."<br>";
	           $res=shell_exec($cmd);
	               echo $res."</hr>";
	               }
	   
	   ?>
