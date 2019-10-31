<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<!-- Navbar (sit on top) -->
	<div class="w3-top">
	  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
		<a href="https://www.dbs.com" class="w3-bar-item w3-button">
			<img src="dbslogo.png" alt="logo" style="width:50px; height:auto;">
		</a>
		<!-- Float links to the right. Hide them on small screens -->
		<div class="w3-right w3-hide-small">
			<a href="portfolio.php" class="w3-bar-item w3-button">
				<i class="fas fa-user"></i>
			</a>
			<a href="#about" class="w3-bar-item w3-button">
				<i class="far fa-question-circle"></i>
			</a>
			<a href="#contact" class="w3-bar-item w3-button">
				<i class="fas fa-bars"></i>
			</a>
		</div>
	  </div>
	</div>
	
<!-- Page content -->
	<div class="w3-content w3-padding" style="max-width:1564px">
		<br><br><br>
		<h1>Welcome XXX!</h1>
		<!-- Project Section -->
		<div class="w3-container w3-padding-32" id="projects">
			<h2 class="w3-border-bottom w3-border-light-grey w3-padding-16">Overview</h2>
		</div>
		
		<?php
			$DEBIT_SUM = 0;
			$FNB_SUM = 0;
			$TRANS_SUM = 0;
			$TRANSPORT_SUM = 0;
			$ATM_SUM = 0;
			$SUM = 0;
			$REMAIN = 0;
			$file = fopen("trans.csv","r");
			while(! feof($file))
			  {
				$transactions = fgetcsv($file);
				if($transactions[5]=="DEBIT") {
					$DEBIT_SUM = $DEBIT_SUM+$transactions[3];
				} elseif($transactions[5]=="F&B") {
					$FNB_SUM = $FNB_SUM+$transactions[3];
				} elseif($transactions[5]=="TRANSFER") {
					$TRANS_SUM = $TRANS_SUM+$transactions[3];
				} elseif($transactions[5]=="TRANSPORT") {
					$TRANSPORT_SUM = $TRANSPORT_SUM+$transactions[3];
				} elseif($transactions[5]=="ATM") {
					$ATM_SUM = $ATM_SUM+$transactions[3];
				}
				$SUM = $SUM + (float)$transactions[3];
			  }
			fclose($file);	
			$REMAIN = 80000-$SUM
		?> 	
		
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
		  google.charts.load('current', {'packages':['corechart']});
		  google.charts.setOnLoadCallback(drawChart);

		  function drawChart() {

			var data = google.visualization.arrayToDataTable([
			  ['Type', 'Expenditure'],
			  ['Debit', <?php echo $DEBIT_SUM?>],
			  ['F&B', <?php echo $FNB_SUM?>],
			  ['Transfer', <?php echo $TRANS_SUM?>],
			  ['Transport', <?php echo $TRANSPORT_SUM?>],
			  ['ATM', <?php echo $ATM_SUM?>]
			]);

			var options = {
			  title: 'My Expenditure'
			};

			var chart = new google.visualization.PieChart(document.getElementById('piechart'));

			chart.draw(data, options);
		  }
		</script>
		
		<center>
		<div id="piechart" style="width: 900px; height: 500px;"></div>
		<h2>Total Expenditure</h2>
		<p>$ <b><?php echo $SUM ?></b></p>
		<h2>Remaining</h2>
		<p>$ <b><?php echo $REMAIN ?></b> of $ <b>80000.00</b></p>
		
		
		<table style="width:80%">
			<tr>
				<td style="padding-left:80px">
					<a href="" >
						<div class="w3-display-container">
							<i class="fas fa-bus"></i><br>
							<div>F&B</div>
						</div>
					</a>
				</td>
				<td style="padding-left:80px">
					<a href="" >
						<div class="w3-display-container">
							<i class="fas fa-utensils"></i><br>
							<div>Transfers</div>
						</div>
					</a>
				</td>
				<td style="padding-left:80px">
					<a href="transport.php" >
						<div class="w3-display-container">
							<i class="fas fa-theater-masks"></i><br>
							<div>Transport</div>
						</div>
					</a>
				</td>
				<td style="padding-left:80px">
					<a href="" >
						<div class="w3-display-container">
							<i class="fas fa-file-invoice"></i><br>
							<div>ATM</div>
						</div>
					</a>
				</td>
			</tr>
		</table>
		</center>
	</div>
	<center>
	<div>
		<table style="width:90%; border-spacing: 0; border-collapse: collapse; text-align:center" border=3>
			<tr style="background-color: rgba(255,51,51,0.5)">
				<th>
					Date
				</th>
				<th>
					Type
				</th>
				<th>
					Details
				</th>
				<th>
					Amount
				</th>
			</tr>
			<?php
				$firsttime = True;
				$file = fopen("trans.csv","r");
				while(! feof($file))
				  {
					$transactions = fgetcsv($file);
					if($firsttime == False) {
					echo "<tr>";
					echo "<td>";
						echo substr($transactions[4],0,10);
					echo "</td>";
					echo "<td>";
						echo $transactions[5];
					echo "</td>";
					echo "<td>";
						echo $transactions[6];
					echo "</td>";
					echo "<td>";
						echo $transactions[3];
					echo "</td>";
					echo "</tr>";
					}
					$firsttime = False;
				  }
				fclose($file);	
			?>
		</table>
	</div>
	<br>
	<hr style="width:95%">
	<br>
	<div style="background-color:rgba(255,51,51,0.3)">
		<h2>
			Insurances
		</h2>
		<div class="w3-display-container" style="margin-bottom:50px">
			<img src="insurance.jpg" style="width:100%">
			<div class="w3-display-bottomleft w3-container w3-sand w3-hover-white w3-hide-small"
			style="bottom:10%;opacity:0.7;width:70%">
			<h2><b>Are You Insured?</b><br><b>Stay insured with <span style="color:red">DBS</span></b></h2>
			</div>
		</div>
	</div>
	<div>
		<h2>
			Incentives
		</h2>
		<div><a href="https://www.grab.com/sg/"><img src="grab.jpg" alt="grab" style="height:auto; width:500px"></a></div><br>
		<p>[Grab] <b>10%</b> off all rides, cap at $5</p>
		<div><a href="https://www.gojek.com/sg/"><img src="gojek.png" alt="gojek" style="height:auto; width:500px"></a></div>
		<p>[Gojek] <b>$5</b> off all rides!</p>
		<div><a href="https://www.benjerry.com.sg/"><img src="bnj.png" alt="bnj" style="height:auto; width:500px"></a></div>
		<p>[Ben and Jerry's] Purchase <b>2</b> tubs at the price of <b>1</b>!</p>
	</div>
	</center>
</body>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default