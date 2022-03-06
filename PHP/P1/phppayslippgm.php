<?php
	//getting values entered in the html form
	$na=$_POST["nam"];

	$des=$_POST["desig"];

	$basic=$_POST["sal"];

	$hra=0.25*$basic;

	switch($des)

	{
		//assigning of conveyance and extra allowance for employees of each designation
		case 'manager':

          				$ca=1000;

          				$ea=500;

           				break;

		case 'supervisor':

          				 $ca=750;

           				$ea=200;

           				break ;



		case 'clerk':

     				 $ca=500;

      				$ea=100;

      				break;

		case 'peon':

      				$ca=250;

      				$ea=0;

      				break;

	}



$gross=$basic+$ca+$ea+$hra;
	if($gross<=2000)

		$it=0;

	elseif($gross<=4000)

		$it=$gross*0.03;

	elseif($gross<=5000)

		$it=$gross*0.05;

	else

		$it=$gross*0.08;

	$net=$gross-$it;

	echo"

		<table border=1 rules=all width=50%>

		<tr><td colspan=2 align=center><strong>PAY SLIP</strong></td></tr>

		<tr><td width=50%>Employee Name</td>

		<td width=50%>$na</td></tr>

		<tr><td width=50%>Designation</td>

		<td width=50%> $des</td></tr>

		<tr>

		<td>Salary Component</td><td>Amount(in Rs)</td>

		<tr><td>Basic Salary</td>  <td>$basic</td></tr>

		<tr><td>Conveyence Allowance</td>  <td>$ca</td></tr>

		<tr><td>Extra Allowance</td>  <td>$ea</td></tr>
	
		<tr><td>House Rent Allowance</td>  <td>$hra</td></tr>

		<tr><td> Gross Salary</td><td>$gross</td>

		<tr><td> Income Tax Deduction</td><td>$it</td>

		<tr><td ><strong> Net Salary</strong></td><td><h3>$net</h3></td></tr></table>";

?><br><br>

<input type=button  value="Prepare another payslip" onclick="parent.location='phppayslippgm.html'">
