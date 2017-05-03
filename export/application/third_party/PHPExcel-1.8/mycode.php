<?php
function myfputcsv($handle, $array, $delimiter = ',', $enclosure = '"', $eol = "\n") {
    $return = fputcsv($handle, $array, $delimiter, $enclosure);
    if($return !== FALSE && "\n" != $eol && 0 === fseek($handle, -1, SEEK_CUR)) {
        fwrite($handle, $eol);
    }
    return $return;
}
if(isset($_POST['mydrivers']))  {  
$header=array();
$data=array();
 foreach (array_slice($_POST,0,count($_POST)-1) as $key => $value) {	
	 //$header[]=$key;
	 $data[]=$value;
 }	
$fp = fopen('driver.csv', 'a+');
	//fputcsv($fp, $header);
	myfputcsv($fp, $data);
fclose($fp);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Drive Check In </title>
<script type = "text/javascript">
function reset()
{
  var driver = document.getElementById("drivers");
  var date = docuemt.getElementById("dates");
  var custnum = document.getElementById("customernum");
  var invnum = document.getElementById("invoicenum");
  var proddesc = document.getElementById("proddes");
  var sz = document.getElementById("size");
  var cs = document.getElementById("cs");
  var btls = document.getElementById("btls");
  var chkint = document.getElementById("chkitls");

  driver.value.reset();
  date.value.reset();
  custnum.value.reset();

}
</script>
</head>
<body>
<form action=""  method ="post">
<table id = "shortages" >
<h1> Shortages </h1>
<thead>
<tr>
  <th> Driver </th>
  <th> Date </th> 
  <th> Customer# </th>
  <th> Invoice# </th>
  <th> Product Description </th>
  <th> Size </th>
  <th> CS </th>
  <th> Btls </th>
  <th> CHK Itls </th>
</tr>
</thead>
<tr>
  <td>
  <select id = "drivers" name = 'drivers'>
    <option value = " "> </option>
    <option value = "Driver1"> Driver1 </option>
    <option value = "Driver2"> Driver2 </option>
    <option value = "Driver3"> Driver3 </option>

  </select></td>

  <td> <input type = "text" id = "dates" size = "10" name = "dates"></td>
  <td> <input type = "number" min = "1" max = "99999999" id = "customernum" name = "customernum"></td>
  <td> <input type = "number" min = "1" max = "99999999" id = "invoicenum" name = "invoicenum"></td>
  <td> <input type = "text" id = "proddes" name = "proddes"></td>
  <td> <input type = "number" id = "size" name = "size"></td>
  <td> <input type = "number" id = "cs" name = "cs"></td>
  <td> <input type = "number" id = "btls" name = "btls"></td>
  <td> <input type = "text" id = "chkitls" name = "chkitls"></td>
</tr>
</table>
<input type="submit" value ="submit" name="mydrivers">
</form>
	</body>
</html>