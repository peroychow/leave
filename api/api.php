<?php 

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);

$link = mysqli_connect('localhost', 'root', '', 'db_cuti');
mysqli_set_charset($link, 'utf8');

$data = preg_replace('/[^a-z0-9_]+/i', '', array_shift($request));
$id = array_shift($request)+0;

if(strcmp($data, 'data') == 0) {
	switch ($method) {
		case 'GET':
			$sql = "SELECT * FROM tb_mohoncuti" . ($id?" WHERE no_cuti = $id": '');
			$result = mysqli_query($link, $sql);
			break;
		
		default:
			# code...
			break;
	}
}