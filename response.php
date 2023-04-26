<?php

$a = array();

array_push($a,array("type"=>0,"content"=>'My Title',"bold"=>1,"align"=>2,"format"=>3));

array_push($a,array("type"=>1,"path"=>'https://it.m.wikipedia.org/wiki/File:Circle_-_black_simple.svg',"align"=>2));

echo json_encode($a,JSON_FORCE_OBJECT);

?>