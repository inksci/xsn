<?php
$GET = $_SERVER["QUERY_STRING"];

// NOTICE the 'LIU'

$teacher_name=array("李","范","刘","吴","谭","朱","蒋","罗","廖");
$teacher_pinyin=array("li","fan","LIU","wu","tan","zhu","jiang","luo","LIAO");

for($i=0;$i<count($teacher_name);$i++){

	if( strpos($GET,$teacher_pinyin[$i])!==false ){
		include("teacher-html/".$teacher_pinyin[$i].".html");
		die;
		break;
	}

}

echo $GET;
