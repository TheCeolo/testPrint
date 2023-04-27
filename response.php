<?php

$a = array();
array_push($a,array("type"=>3,"value"=>'My Title',"size"=>40,"align"=>2));
header('Content-type: application/json');
echo json_encode($a,JSON_FORCE_OBJECT);

?>