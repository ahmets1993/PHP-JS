<!--Form to an RSS Feed-->
	<div class="wrapper-main" text align="center">
		<section class="section-default">
			<h1 class ="text-secondary">RSS/Atom Feed</h1>
			<form action=""  name="myForm" >
				<div class="form-row">
					<div class="form-group col-md-12">
						<input type="text" name="link"  >
					</div>
				</div>
				  <button type="submit" name="load" class="btn btn-dark">Load</button>

			</form>
		</section>	
	</div>

	<div id="content">

	</div>

	</div>
<script type="text/javascript">
	//send the link to the server, put the responds in the content div
function loadNewsFeed(){

              var link = document.forms["myForm"]["link"].value; //gets the link from the form
              var xhttp = new XMLHttpRequest();// create an object of XML HTTP request
              xhttp.open("POST", "actions/rssreader.php", true); //post request, target.php, false-synchronous(wait until respond)
             xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
             xhttp.onreadystatechange = function() {
				  if (this.readyState == 4 && this.status == 200) {
					document.getElementById("content").innerHTML = xhttp.responseText; //put responseText into content div
					//console.log("content was set");
				  }
				};

              var params = 'link=' + link; // link parameter
 			xhttp.send(params); //send link parameter to xssreader
 			//console.log("end of function");
}

</script>