<?php include("../co.php");?><!doctype html>
<html lang="en">
  <head>
  	<title>Calendar 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">.ie2a span{color:blue;}</style>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet"><script type="text/javascript">var selectQworkDays=0;</script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css"><style type="text/css">.mo{display: block;padding: 12px;}.m57e>button{width:100%;height:62px;padding:12px;}#c2{display:none;}</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section" id="ei">View Appointments#</h2>
					<div class="m57e"><button onclick="selectQworkDays=0;document.getElementById('ei').innerHTML ='View Appointments#';">View Appointments</button><button onclick="selectQworkDays=1;document.getElementById('ei').innerHTML ='Select Work Days#';">Select Work Days</button></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" id="a1">
					<div class="content w-100">
				    <div class="calendar-container">
				      <div class="calendar"> 
				        <div class="year-header"> 
				          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
				          <span class="year" id="label"></span> 
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div> 
				        <table class="months-table w-100"> 
				          <tbody>
				            <tr class="months-row"><td class="month">Jan</td> <td class="month">Feb</td> <td class="month">Mar</td> <td class="month">Apr</td> <td class="month">May</td> <td class="month">Jun</td> <td class="month">Jul</td> <td class="month">Aug</td> <td class="month">Sep</td> <td class="month">Oct</td> <td class="month">Nov</td> <td class="month">Dec</td> </tr>
				          </tbody>
				        </table> 
				        
				        <table class="days-table w-100"><td class="day">Sun</td> <td class="day">Mon</td> <td class="day">Tue</td> <td class="day">Wed</td> <td class="day">Thu</td> <td class="day">Fri</td> <td class="day">Sat</td> </table>
				        <div class="frame"> 
				          <table class="dates-table w-100"> 
			              <tbody class="tbody">             
			              </tbody> 
				          </table>
				        </div>
				      </div>
				    </div>
				  </div></div>
				<button style="width:100%;padding:23px;background:#d77177;color:#fff;">Save</button>
			</div>
		</div>
	</section>

	<pre>
	<?php $dbstmt=db::stmt("select * FROM schedulee");while($feAssoc=mysqli_fetch_assoc($dbstmt)){
		$ex=explode(" ",$feAssoc['date']);
		$dd=date("j--m--Y", strtotime($ex[0].".".str_replace(",","",$ex[2]).".".$ex[3]."."));
		$dat=explode("--",$dd);

		$au[]=[
			"occasion"=>"<div class='ie2a'>Time: <span>".$feAssoc['time']."</span><br>Hair Style: <span style='color:green;text-transform: capitalize'>".$feAssoc['hairstyle']."</span><br>Customer Name: <span>".$feAssoc['customername']."</span><br>Price: <span>$".$feAssoc['price']."</span><br><div><a href='".site::url(1)."schdl/receiphair.php?s=1!&ids=".$feAssoc['rida']."' target='_blank'>View Full description: Click here!!</a></div><br></div>",
			"year"=>(int)$dat[2],
			"month"=>(int)$dat[1],
			"day"=>(int)$dat[0],
			"cancelled"=>false
];}
$auu=($au);

	?>
		

	</pre>
<script type="text/javascript">
	
var event_data = {
    "events": [
    	{"occasion":"1","year":1,"month":1,"day":1,"cancelled":true}
    	<?php foreach($auu as $g){echo ",",json_encode($g);};?>
    ]
};
</script>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

