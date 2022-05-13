<?php 
/*
Class Name:		SimpleMultiplicationTable2 
Author    : 	Mr. Dharmendra Kumar 
Author URI: 	http://www.dharmendramca.wordpress.com
GIT       : 	https://github.com/dharmendramca
Ver 	  :		  2.0
*/ 

class SimpleMultiplicationTable2 { 

private $val=array();

public function output(...$num_array) 
{ 

?><style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Mukta&display=swap');




/*** Table Styles **/

.table-fill {
 height: auto;
  margin: auto;
  max-width: 600px;
  padding:2px;
  width: 100%;
  border: none;
 font-family: 'Mukta', sans-serif; 
}


.table-fill caption{
    border: 1px solid #000;
    width: 100%;
    max-width: 590px;
    background: #000;
    margin: auto;
    color: #fff;
    padding: 6px;;

}

tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:hover td {
  background:#000;
   color:#FFF;
}

 
tr td {
  background:#000000cf;
  padding:6px;
  text-align:center;
  vertical-align:middle;
  font-family: 'Mukta', sans-serif;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  color:#fff;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}

</style>



<div style="overflow-x:auto;">
		
  <?php 
  if(!empty($num_array))
    $num_array=$num_array;
  else
    $num_array=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

  if(count($num_array)>100)
    die("Error: You can print only 100 tables");
  foreach(array_unique($num_array) as $value){ ?>
    <table class="table-fill" style="<?php if(count($num_array)>1) echo 'margin-bottom: 20px;'; ?>">

<caption>Table of <?php echo $value; ?></caption>
<?php for ($i=1; $i <=10; $i++) { ?> 
<tr>
<td align="center"> <?php echo $value; ?></td>	
<td align="center">X</td>
<td align="center"> <?php echo $i; ?></td>
<td align="center">=</td>
<td align="center"> <?php echo ($value*$i); ?></td>
</tr>
  <?php } ?>
</table>
 <?php } ?> 
</div>
<?php

	}
} 

?>
