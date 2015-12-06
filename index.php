<!DOCTYPE html>
<html>
	<head>
		<title>MovieMovie</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="wadstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />


	</head>
	
	<body>
<!--Tim -->
	<script>
		
        var XMLHttpRequestObject = false;
            if(window.XMLHttpRequest){
                XMLHttpRequestObject = new XMLHttpRequest();
            }
            else if(window.ActiveXObject){
                XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
       function getData(datasource,divID){
                if(XMLHttpRequestObject){
                    var obj = document.getElementById(divID);
                    XMLHttpRequestObject.open("GET",datasource,true);
                    XMLHttpRequestObject.onreadystatechange = 
                    function(){
                        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
                            obj.innerHTML=XMLHttpRequestObject.responseText;
                        }
                    }
                    XMLHttpRequestObject.send(null);
                }
            }
        </script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script type="text/javascript">
            $(function(){
                $("#div2").load("show.php");
            });
         </script>
        <div id="div2"></div>
<!-- Tim -->
		
		

		<?php include "header.php" ?>
		<?php include "Maincontent.php" ?>
		<?php include "footer.php" ?>
		

		
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.js"></script><script>
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