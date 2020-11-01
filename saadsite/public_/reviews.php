<!DOCTYPE html>
<html>
<head>
<title>Reviews</title>
<link rel="stylesheet" type="text/css" href="Background.css">
<link rel="stylesheet" type="text/css" href="reviews.css">
</head>
<body>

<?php include 'navbar.php';?>

<div class="background">

<div class="container">

<h1>Let us know about your experience in A-Town!</h1>

<form action="addreview.php" method="POST">

<p>
Name: <input type="text" name="reviewer_name"><br><br>

Rate us:
<select name="star_rating">
  <option value="1">1 star</option>
  <option value="2">2 stars</option>
  <option value="3">3 stars</option>
  <option value="4">4 stars</option>
  <option value="5">5 stars</option>
</select><br><br>

Your review: <br>
<textarea name="comment" rows="10" cols="98"></textarea><br><br>

<input type="submit" value="Submit" name="submit">
</p>
</form>
<?php include 'showreview.php';?>
</div>


<div class="div1">
<h2>Opening Times:<br></h2>
<p>Monday: 10am-8pm (Adam not available)<br><br>
Tuesday: 10am-8pm<br><br>
Wednesday: 10am-8pm<br><br>
Thursday: 10am-8pm<br><br>
Friday: 10am-8pm<br><br>
Saturday: 10am-8pm<br><br>
Sunday: 10am-8pm
</div>

<div class="div2">
<h2>Location:<br></h2><br>
<p>(Click to enlarge)</p>
<img id="myImg" src="Location.jpg" alt="Location" style="width:100%;
max-width:300px">

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
var modal = document.getElementById("myModal");

var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}
</script>

</div>
</div>
</body>
</html>
