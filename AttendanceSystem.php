<?php

$con = mysqli_connect("localhost","root","root","deptcs");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

//$sql="select * from student";

$query = "SELECT * FROM student where Regno='$_POST[regno]'";
    
$result = mysqli_query($con, $query);

while($rowval = mysqli_fetch_array($result))

 {

$Register_No= $rowval['Register_No'];

$sname= $rowval['Name'];

$OA_LAB= $rowval['OA_LAB'];
	
$PST1_LAB_LAB= $rowval['PST1_LAB'];
	
$C_LAB= $rowval['C_LAB'];
	
$PST2_LAB= $rowval['PST2_LAB'];
	
$CPPDS_LAB= $rowval['C++&DS_LAB'];
	
$INTERNET_LAB= $rowval['INTERNET_LAB'];
	
$AC1_LAB= $rowval['AC1_LAB'];
	
$JAVA_LAB= $rowval['JAVA_LAB'];
	
$PSA_LAB= $rowval['PSA_LAB'];
	
$AC2_LAB= $rowval['AC2_LAB'];
	
$MP_LAB= $rowval['MP_LAB'];
	
$MD_LAB= $rowval['MD_LAB'];
	
$CN_LAB= $rowval['CN_LAB'];
	
$CES_LAB= $rowval['CES_LAB'];
	
$DBMS_LAB= $rowval['DBMS_LAB'];
	
$OS_LAB= $rowval['OS_LAB'];
	
$OSP_LAB= $rowval['OSP_LAB'];
	
}

mysqli_close($con);


?>

<html>

<body>

<form action="AttendanceSystem.php" method="post">
	<table style="color:purple;border-style:groove; height:150px;width:350px" background="backimage.jpg">

            <tr>

                <td style=" height:25px; font-family:'Copperplate Gothic Bold'">&nbsp;</td>

            </tr>

            <tr>

                <td style="color:red;background-color:aqua;height:25px">Enter Register no&nbsp;&nbsp;&nbsp;&nbsp;

                    <input name="regno" id="regno" type="text"/></td>

            </tr>

            <tr>

                <td style="height:25px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                           <input type="submit" value="Submit" style="color:white;background-color:brown; height:30px" /></td>

            </tr>


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

             <td style="color:red;background-color:aqua;" class="auto-style3">OA/OSW_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $OA_LAB; ?>' /></td>

        </tr>
       <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">PST1/CMP1_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $PST1_LAB; ?>' /></td>

        </tr>
       <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">Prog in C_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $C_LAB; ?>' /></td>

        </tr>
         <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">PST2/CMP2_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $PST2_LAB; ?>' /></td>

        </tr>        
       <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">C++ & DS_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $CPPDS_LAB; ?>' /></td>

        </tr>
	         <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">INTERNET_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $INTERNET_LAB; ?>' /></td>

        </tr>
	         <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">ACCOUNTANCY1_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $AC1_LAB; ?>' /></td>

        </tr>
	         <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">JAVA_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $JAVA_LAB; ?>' /></td>

        </tr>
	         <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">PSA_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $PSA_LAB; ?>' /></td>

        </tr>
	         <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">ACCOUNTANCY2_LAB:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $AC2_LAB; ?>' /></td>

        </tr>
    </table>

</form>

</body>

</html>
