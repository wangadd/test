<?php
echo "aaa";
$server=[
	    '192.168.80.111',
	        '192.168.80.112'
	];
foreach ($server as $k=>$v){
	    $cmd='ssh '. $v .' "cd /www/test/test/ && git pull"';
	    //    echo $cmd."<br>";
	           $res=shell_exec($cmd);
	               echo $res."</br>";
	               }
	   
	   ?>
