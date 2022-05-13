# SimpleMultiplicationTable2

<?php
require_once("SimpleMultiplicationTable2.php");

$obj=new SimpleMultiplicationTable2();

/*
You can print multiple table at onnce.  
$table = $obj->output(4,5,6,7,8);
echo $table;
if no argument given it will print 1, 20 table.
*/

$table = $obj->output();
echo $table;
