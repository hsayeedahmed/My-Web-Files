<?php

$con = mysqli_connect("localhost","root","root","deptcs");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

//$sql="select * from student";

$query = "SELECT * FROM student where Regno='$_POST[name]'";
    
$result = mysqli_query($con, $query);

while($rowval = mysqli_fetch_array($result))

 {

$Regno= $rowval['Regno'];

$sname= $rowval['sname'];

$attendance= $rowval['attendance'];

}

mysqli_close($con);


?>

<html>

<body>

<from >

 

  <table  style="color:purple;border-style:groove; height:150px;width:350px" background="3.jpg">

        <tr>

            <td style="font-family:Copperplate Gothic Bold">&nbsp;</td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">Register no:</td>

            <td class="auto-style4">

                <input id="Text1" type="text" value='<?php echo  $Regno; ?>'/></td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">Name:</td>

            <td class="auto-style4">

                <input id="Text2" type="text" value='<?php echo  $sname; ?>'/></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">Attendance:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $attendance; ?>' /></td>

        </tr>

              
    </table>

</form>

</body>

</html>