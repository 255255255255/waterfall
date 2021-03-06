<?php

	header('Content-Type:application/json; charset=utf-8');

	// 读取json数据
	$data = file_get_contents('ajax-templete-waterfall.json');

	// 转换成PHP数组
	$data = json_decode($data);

	// 根据页码计算offset
	$page = $_POST['page'];

	$offset = ($page - 1) * 10;

	// 截取10条数据
	$result = array_slice($data, $offset, 10);

	$page++;

	echo json_encode(array('page'=>$page, 'items'=>$result));

	sleep(3);

?>