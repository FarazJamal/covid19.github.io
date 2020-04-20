<!DOCTYPE HTML>

<html>
<head>
	<?php	
	include 'links/links.php';
	include 'css/style.css';
	?>

</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg navst p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>		
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="#symp">Symptoms</a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="#prevent">Prevention</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#cont">Contact</a>
      </li>
	  
    </ul>
</nav>

<div class="main">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="left w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/1.jpg" width="250" height="250">
			</div>
		</div>
				
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="right w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Against Cor<span class="cor"><img src="images/2.png"width="70" height="70"></span>na Virus</h1>
			</div>
		</div>		
	</div>
</div>


<section class="corup container-fluid">
	<div class="mb-3">
		<h3 class="text-center text-capitalize">Covid-19 Live Updates</h3>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center" id="tv">
			<tr>
				<th>Country</th>
				<th>TotalDeaths</th>		
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>				
				<th>NewDeaths</th>
				<th>NewConfirmed</th>				
				<th>NewRecovered</th>
				<th>LastUpdated</th>					
			</tr>
		</table>	
	</div>
	
</section>


<div class="container-fluid subs pt-5 pb-5" id="about">
	<div class="sech text-center mb-3 mt-5">
		<h1>About COVID-19</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 bos">
			<img src="images/3.jpg" class="img-fluid">		
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19 (Corona-Virus)</h2>
			<p>As of April 11, more than 103,000 people worldwide have died of COVID-19, the highly infectious respiratory disease caused by the coronavirus. The number of people who have tested positive for COVID-19 has exceeded 1.7 million, according to data compiled by Johns Hopkins University. </p>
			<p>Symptoms of COVID-19 may appear in as few as 2 days or as long as 14 (estimated ranges vary from 2-10 days, 2-14 days, and 10-14 days, see details), during which the virus is contagious but the patient does not display any symptom .</p>
		</div>		
		
	</div>

</div>



<div class="container-fluid pt-5 pb-5" id="symp">
	<div class="sech text-center mb-3 mt-5">
		<h1>Coronavirus Symptoms</h1>
	</div>

	<div class="container">	
		<div class="row">	
		
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/4.jpg" class="img-fluid" width="120" height="120">
					<figcaption>Cold</figcaption>
				</figure>
			</div>
			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/6.jpg" class="img-fluid" width="120" height="120">
					<figcaption>Flu</figcaption>
				</figure>
			</div>			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/7.jpg" class="img-fluid" width="120" height="120">
					<figcaption>Chest Pain</figcaption>
				</figure>
			</div>			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/8.jpg" class="img-fluid" width="120" height="120">
					<figcaption>Fever</figcaption>
				</figure>
			</div>			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/9.jpg" class="img-fluid" width="120" height="120">
					<figcaption>Cough</figcaption>
				</figure>
			</div>			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/10.jpg" class="img-fluid" width="120" height="120">
					<figcaption>Headache</figcaption>
				</figure>
			</div>						
		</div>
	</div>
	
</div>



<div class="container-fluid subs pt-5 pb-5" id="prevent">
	<div class="sech text-center mb-3 mt-5">
		<h1>6 Steps Prevention Against Coronavirus</h1>
	</div>

	<div class="container">
		<div class="row cent">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">				
						<figure class="text-center">
							<img src="images/11.jpg" class="img-fluid" width="90" height="90">							
						</figure>								
					</div>					
					<div class="col-lg-8 col-md-8 col-12">
						<p>Wash your hands with soap for 20 seconds.</p>
					</div>					
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">				
						<figure class="text-center">
							<img src="images/12.png" class="img-fluid" width="90" height="90">							
						</figure>								
					</div>					
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay at home.</p>
					</div>					
				</div>
			</div>			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">				
						<figure class="text-center">
							<img src="images/13.jpg" class="img-fluid" width="90" height="90">							
						</figure>								
					</div>					
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news.</p>
					</div>					
				</div>
			</div>			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">				
						<figure class="text-center">
							<img src="images/14.png" class="img-fluid" width="90" height="90">							
						</figure>								
					</div>					
					<div class="col-lg-8 col-md-8 col-12">
						<p>Keep Social Distance.</p>
					</div>					
				</div>
			</div>			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">				
						<figure class="text-center">
							<img src="images/15.jpg" class="img-fluid" width="90" height="90">							
						</figure>								
					</div>					
					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your face.</p>
					</div>					
				</div>
			</div>			
			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">				
						<figure class="text-center">
							<img src="images/16.jpg" class="img-fluid" width="90" height="90">							
						</figure>								
					</div>					
					<div class="col-lg-8 col-md-8 col-12">
						<p>Take medicines if suffering from fever.</p>
					</div>					
				</div>
			</div>			
			
		</div>
	</div>
</div>



<div class="container-fluid pt-5 pb-5" id="cont">
	<div class="sech text-center mb-3 mt-5">
		<h1>Contact us ASAP</h1>
	</div>
</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12 mt-5">
			
			<form action="" method="POST">

			  <div class="form-group">
				<label>Full Name</label>
				<input type="text" class="form-control" name="user" placeholder="Eg. Faraz Jamal" required>
			  </div>
			  
			  <div class="form-group">
				<label>Email address</label>
				<input type="email" class="form-control" name="email" placeholder="name@example.com" required>
			  </div>

			  <div class="form-group">
				<label>Mobile No.</label>
				<input type="number" class="form-control" name="mobile" placeholder="0333-1234567" required>
			  </div>			  

			  <div class="form-group">
				<label>Select Symptoms:</label>				
			  </div>

			  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="cosym[]" value="Cold">
				<label class="custom-control-label" for="customcheckbox1">Cold</label>
			  </div>			  

			  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="cosym[]" value="Fever">
				<label class="custom-control-label" for="customcheckbox2">Fever</label>
			  </div>
			  
			  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="cosym[]" value="Breath">
				<label class="custom-control-label" for="customcheckbox3">Difficulty in Breath</label>
			  </div>			  
			  
			  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="cosym[]" value="Weak">
				<label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
			  </div>

			  <div class="form-group mt-4">
				<label for="exampleFormControlTextarea1">Complete Details</label>
				<textarea class="form-control" rows="3" name="msg"></textarea>
			  </div>
			  
			    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			  
			</form>
						
			</div>
		</div>	
	</div>	


<div class="container scrollTop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>

</div>










	
	
<footer class="mt-5">
	<div class="fot text-white text-center container-fluid">
		<p>Copyright Reserved</p>

	</div>
</footer>


  <script type="text/javascript">
  
		
			$('.count').counterUp(
		{
			delay: 50,
			time: 8000
		}
		)
		
		
		
		//Get the Button:
		mybutton = document.getElementById("myBtn");
		
		//When user scrolls down 20px from top of doc, show button
		window.onscroll = function()
			{
				scrollFunction()
			};
		
		function scrollFunction()
		{
			if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
			{
				mybutton.style.display = "block";
			}
			else
			{
				mybutton.style.display = "none";
			}			
		}
		
		//When the user clicks on the button, scroll to top of document
		
		function topFunction()
		{
			document.body.scrollTop = 0;   //For Safari
			document.documentElement.scrollTop = 0; //For IE, Chrome, FireFox, Opera
		}

		
		
		
		
		
		
		
		function fetch()
		{
			$.get("https://api.covid19api.com/summary",
			function (data)
				{	
					//console.log(data['Countries'].length);
				
				var tv = document.getElementById('tv');
			
				for(var i=1; i<(data['Countries'].length); i++)
					{
						var x = tv.insertRow();
						
						x.insertCell(0);				
						tv.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
						tv.rows[i].cells[0].style.background = '#7a4a91';
						tv.rows[i].cells[0].style.color = 'white';
						
						x.insertCell(1);				
						tv.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalDeaths'];
						tv.rows[i].cells[1].style.background = '#f36e23';

						x.insertCell(2);				
						tv.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
						tv.rows[i].cells[2].style.background = '#4bb7d8';

						x.insertCell(3);				
						tv.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalRecovered'];
						tv.rows[i].cells[3].style.background = '#9cc850';

						x.insertCell(4);				
						tv.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewDeaths'];
						tv.rows[i].cells[4].style.background = '#f36e23';

						x.insertCell(5);				
						tv.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewConfirmed'];
						tv.rows[i].cells[5].style.background = '#4bb7d8';

						x.insertCell(6);				
						tv.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewRecovered'];
						tv.rows[i].cells[6].style.background = '#9cc850';
					
						x.insertCell(7);				
						tv.rows[i].cells[7].innerHTML = data['Countries'][i-1]['Date'];
						tv.rows[i].cells[7].style.background = '#9cc850';					
					}
								
				}
			
			);
		}
		
		
		
  
  </script>

</body>
</html>



<?php

include 'conn.php';

if(isset($_POST['submit']))
{
	$user = $_POST['user'];	
	$email = $_POST['email'];		
	$mobile = $_POST['mobile'];		
	$symp = $_POST['cosym'];		
	$msg = $_POST['msg'];		

	$chk = "";
	
	foreach($symp as $chk1)
	{
		$chk .= $chk1."," ;
	}

	$insert = "INSERT INTO CASES(user, email, mobile, symp, details) VALUES('$user', '$email', '$mobile', '$chk', '$msg') ";

	$query = mysqli_query($con, $insert);
	
	if($query)
		{
		?>	

			<script>
				alert("Inserted Successful");
			</script>		

		<?php	
		}
		else
		{
		?>
			<script>
				alert("Not Inserted");
			</script>
			
		<?php
		}
			
}

?>