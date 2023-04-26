<?php
//you can print text, image, barcode and QR code by sending request from your website. You just need to send data in JSON format
//note that putting comments, header output etc. may create invalid JSON response and app cannot parse the response
$a = array();

//sending text entry
$obj1->type = 0;//text
$obj1->content = 'My Title';//any string	
$obj1->bold = 1;//0 if no, 1 if yes
$obj1->align =2;//0 if left, 1 if center, 2 if right
$obj1->format = 3;//0 if normal, 1 if double Height, 2 if double Height + Width, 3 if double Width, 4 if small
array_push($a,array("type"=>1,"content"=>'My Title',"bold"=>1,"align"=>2,"format"=>3));

array_push($a,array("type"=>1,"path"=>'https://it.m.wikipedia.org/wiki/File:Circle_-_black_simple.svg',"align"=>2));
//sending barcode entry		
/* $obj3->type = 2;//barcode
$obj3->value = '1234567890123';//valid barcode value
$obj3->width = 100;//valid barcode width
$obj3->height = 50;//valid barcode height
$obj3->align = 0;//0 if left, 1 if center, 2 if right
array_push($a,$obj3);

//sending QR entry		
$obj4->type = 3;//QR code
$obj4->value = 'sample qr text';//valid QR code value
$obj4->size = 40;//valid QR code size in mm
$obj4->align = 2;//0 if left, 1 if center, 2 if right
array_push($a,$obj4);

//sending HTML Code	
$obj5->type = 4;//HTML Code
$obj5->content = "<center><span style=\"font-weight:bold; font-size:20px;\">This is sample text</span></center>";
array_push($a,$obj5);

//sending empty line
$obj6->type = 0;//text
$obj6->content = ' ';//empty line
$obj6->bold = 0;
$obj6->align = 0;
array_push($a,$obj6);

//sending multi lines text
$obj7->type = 0;//text
$obj7->content = 'This text has<br />two lines';//multiple lines text
$obj7->bold = 0;
$obj7->align = 0;
array_push($a,$obj7); */
$aa= '{"0":{"type":0,"content":"MMHARA My Title id=\u00ef\u00ee\u00ec\u00c4\u00c5\u00c9\u00e6\u00c6","bold":1,"align":2,"format":3},"1":{"type":1,"path":"https:\/\/www.matetech.in\/wp-content\/uploads\/2014\/08\/2inch_top.jpg","align":2},"2":{"type":2,"value":"1234567890123","width":100,"height":50,"align":0},"3":{"type":3,"value":"sample qr text","size":40,"align":2},"4":{"type":4,"content":"
    ?????? ??? ???? ??<\/b><\/div>
    
    What is this???"},"5":{"type":4,"content":"
    We have this<\/div>
    Sahi hai<\/div><\/div>"},"6":{"type":0,"content":"?? ?? ?? ???? ??? ","bold":0,"align":0},"7":{"type":0,"content":"This text has
    two lines","bold":0,"align":0}}';
echo $aa;
//echo json_encode($a,JSON_FORCE_OBJECT);
//Note that same sequence will be used for printing content
//Note: If any non english entry is added, it will get auto get converted to text special if this setting is on in the app. You will find this setting in Settings->Special Characters
?>