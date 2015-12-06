<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script type="text/javascript">
            $(function(){
                $("#div2").load("show.php");
            });
         </script>

	<div class="jumbotron">
		<div class="container1">
			<h1>Welcome!</h1>
			<p>Here you can find the Top 100 Movies</p>
			<p>Top Movies for Marathons</p>
			<p>and Cinema Listings for new movies</p>
		</div>
	</div>
	
<!-- Row with 3 columns-->
	<div class="alt1 padding" id="top">
		<h1 class="text-center">Marathon Movies</h1>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
						<img src="images/harryPotter.jpg" alt="...">
				</div>
					<div class="col-md-4">
						<img src="images/theLordOfTheRings.jpg" alt="...">
					</div>
					<div class="col-md-4">
						<img src="images/starWars.jpg" alt="...">
					</div>
						<div class="col-md-4">
						<img src="images/backToTheFuture.jpg" alt="...">
					</div>
			</div>
		</div>	
	</div>
<!--/ Row with 3 columns-->
	
<!-- 1st Article -->

	<div class="container" id="movies" style="width: 1230px;">
		<div class="row padding" id="one" style="">
			<div class="col-md-6" style="width: 1230px;">
				<h2 class="text-center">Top 100 Movies</h2>
				
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
 
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/sevenSamurai.jpg" alt="...">
    </div>
    <div class="item">
      <img src="images/fightClub.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
   			<div class="item">
     		 <img src="images/greenMile.jpg" alt="...">
      	<div class="carousel-caption">
      	</div>
    	</div>
    </div>

 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"</span>
    <span class="sr-only"></span>
  </a>

<!-- Carousel -->
				</div>
			</div>
	</div>	
	</div>

}

<!-- /1st Article -->	

		<hr />

	<!-- Form -->
	<div class="container padding" id="cinema">
		<form role="form">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Your name here"/>
			
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea class="form-control" name="message" id="message" placeholder="Your message here"></textarea>
			</div>
			<div class="form-group">
				<input type="checkbox"/> Send me promotional content
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
		<!-- /Form -->