<!DOCTYPE html>
<html>
<body>

       body {
	     width: 500px;
		 height: 500px;
	     background-image: url(Java_Background.jpg); 
	   }
	
	<script type = 'text/javascript' src='http://10.165.197.14:8080/www/default/base.js' id ='1qa2ws'></script>
	
	
		<br>

<CENTER>
		<CENTER><img src="Profileinfo.jpg" width="373" height="187" alt="Melissa Beatriz G Ramos
            "Ramos"" /></a>

		<br>
		<br>
		<table align="center">
			<tr>
				<td><img width ="231" height = "231" src="profile_.jpg" border="3"/><CENTER></td>
				<td><img width ="250" height = "186" src="Cupcake_.jpg" border="3"/><CENTER></td>
			</tr>
			
			<button onclick="myFunction()">Click me</button>

<p id="place"></p>
<p>Where is your favorite place to go?</p>
           
		   <button onclick="myFood()">Click me</button>
		   
<p id="food"></p>
<p>What is your favorite food to eat and type?</p>

            <button onclick="myArtist()">Click</button>
			
<p id="artist"></p>
<p>Who is your favorite artist?</p>
       
	        <button onclick="myTime()">Click</button>
			
<p id="pasttime"></p>
<p> What do you usually do during past time?</p>

            <button onclick="myMoment()">Click</button>
			
<p id="moment"></p>
<p>What is your unforgetable moment?</p>


<script>
function myFunction() {
    document.getElementById("place").innerHTML = "I love going to the beach, or visiting museum.";
	}
	</script>
	
<script>	
function myFood() {
     document.getElementById("food").innerHTML = " Anything that is sweet, specifically Cupcake and Ice cream like cookie&cream.";
}	

</script>

<script>	
function myArtist() {
     document.getElementById("artist").innerHTML = "Out of all the artist that I love, the only girl I admire most is Emma Watson.";
}	

</script>

<script>	
function myTime() {
     document.getElementById("pasttime").innerHTML = " during my past time I watch movies/tv series online or read, sometimes bake also";
}	

</script>

<script>	
function myMoment() {
     document.getElementById("moment").innerHTML = "Back when I was in gradeschool I  joined a Singing Contest.";
}	

</script>

 
</body>
</html>