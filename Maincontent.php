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
		 <a href="#marathon">Top Marathon Movies</a>
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
				<div class="col-md-4">
						<img src="images/theAvengers.jpg" alt="...">
					</div>
					<div class="col-md-4">
						<img src="images/policeAcadamy.jpg" alt="...">
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
	
	<div id="links"> <p></p></div>	
	
				
				
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


<!-- Carousel -->
				</div>
			</div>
	</div>	
	</div>

	

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script type="text/javascript">
            $(function(){
                $("#div2").load("imdb.php");
            });
        
        

		</script>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 10000);
        return false;
      }
    }
  });
});
	</script>
	</body>
</html>
       	
<!-- Kieran's Button -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <button type="button" onclick="loadDoc()">Click For the TOP 100 Movies</button>
        <script type="text/javascript">
       function loadDoc() {timeout = setTimeout(loadDoc, 5000);
            $(function(){
                $("#div2").load("show.php");
            });
       }
         </script>
  <div align="center" id="div2"></div>
   </div>
        </script>
<!-- /Kieran's Button -->

<!-- /1st Article -->	

		<hr />
<!-- Poll -->		
<form method="post" action="http://poll.pollcode.com/65747741">
	<div style="background-color:#000000;padding:2px;width:500px;font-family:Arial;font-size:small;color:#FFFFFF;">
		<div style="padding:2px 0px 4px 2px;">
			<strong>Best Pixar film?</strong>
		</div>
			<input type="radio" name="answer" value="1" id="answer657477411" style="float:center;" />
			<label for="answer657477411" style="float:center;width:475px;">A Bug's Life</label>
			<div style="clear:both;height:2px;">
			</div>
			<input type="radio" name="answer" value="2" id="answer657477412" style="float:center;" />
			<label for="answer657477412" style="float:center;width:475px;">Finding Nemo</label>
			<div style="clear:both;height:2px;">
			</div>
			<input type="radio" name="answer" value="3" id="answer657477413" style="float:center;" />
			<label for="answer657477413" style="float:center;width:475px;">The Incredibles</label>
			<div style="clear:both;height:2px;">
			</div>
			<input type="radio" name="answer" value="4" id="answer657477414" style="float:center;" />
			<label for="answer657477414" style="float:center;width:475px;">Inside Out</label>
			<div style="clear:both;height:2px;">
			</div>
			<input type="radio" name="answer" value="5" id="answer657477415" style="float:center;" />
			<label for="answer657477415" style="float:center;width:475px;">Cars</label>
			<div style="clear:both;height:2px;">
			</div>
			<input type="radio" name="answer" value="6" id="answer657477416" style="float:center;" />
			<label for="answer657477416" style="float:center;width:475px;">Monsters Inc</label>
			<div style="clear:both;height:2px;">
			</div>
			<input type="radio" name="answer" value="7" id="answer657477417" style="float:center;" />
			<label for="answer657477417" style="float:center;width:475px;">Up</label>
			<div style="clear:both;height:2px;">
			</div>
			<input type="radio" name="answer" value="8" id="answer657477418" style="float:center;" />
			<label for="answer657477418" style="float:center;width:475px;">Toy Story
			</label>
			<div style="clear:both;height:2px;">
			</div>
			<input type="radio" name="answer" value="9" id="answer657477419" style="float:center;" />
			<label for="answer657477419" style="float:center;width:475px;">Ratatouille
			</label>
			<div style="clear:both;height:2px;">
			</div>
			<div align="center" style="padding:3px;">
			<input type="submit" value=" Vote ">&nbsp;<input type="submit" name="view" value=" View ">
		</div>
	</div>
		
</form>