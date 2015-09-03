<?php 
	require "include/inic.php";

/**
 * 在线统计阅读数
 * @author Jeffery Cai
 */

	// 打开文件 a+:只读不写，截断：重新添加，存在创建
	$meg=fopen("online_num.txt","a+");

	// 读取文件  fread(resource,int length)
	$count=fread($meg,1000);
	echo "阅读数".$count;
	// 关闭文件
	fclose($meg);

	// 打开文件  
	$megs=fopen("online_num.txt","r+");

	// 写入文件
	fwrite($megs,++$count);

	// 关闭文件
	fclose($megs);
?>