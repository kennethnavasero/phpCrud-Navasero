<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<div class="content">
	<h2>Home</h2>
	<h1 style="color:#3b5084;text-align: center;">Welcome to the home page!</h1>
</div>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 33.33%;
  padding: 5px;
}
img {
	border: 5px solid #3b5084;
}
</style>
</head>
<body>

<div class="row">
  <div class="column">
    <img src="pic1.jpg" alt="pic1" style="width:100%">
  </div>
  <div class="column">
    <img src="picc.jpg" alt="pic2" style="width:100%">
  </div>
  <div class="column">
    <img src="piccc.jpg" alt="pic3" style="width:100%">
  </div>
</div>
</body>
</html>

<?=template_footer()?>
<!DOCTYPE html>
<html>
<head>
<style>
h1 {
	color: #3b5084;
}
.all-browsers {
  margin: 0;
  padding: 5px;
  background-color: #B2B2B2;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
  color: #3b5084;
}
.browser p {
	color: black;
}
.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}

footer {
  text-align: center;
  padding: 20px;
  background-color: #3b5084;
  color: white;
}
</style>
</head>
<body>

<h1>About this Page</h1>

<article class="all-browsers">
  <h1>Content</h1>
  <article class="browser">
    <h2>Read</h2>
    <p >Display records from our database table and navigate with pagination.</p>
  </article>
  <article class="browser">
    <h2>Create</h2>
    <p>Create new records with an HTML form and send data to the server with a POST request.</p>
  </article>
  <article class="browser">
    <h2>Update</h2>
    <p>Update existing records with an HTML form and send data to the server with a POST request.</p>
  </article>
  <article class="browser">
    <h2>Delete</h2>
    <p> Confirm and delete records by ID (GET request to get the ID).</p>
  </article>
    <article class="browser">
    <h2>Function</h2>
    <p> Basic templating functions and MySQL connection function (so we don't have to repeat code in every file).</p>
  </article>

</article>

<footer>
  <p>Kenneth L. Navasero<br> 
  <p>BSIT 3-A WMAD</p>
  <p>Instructor: Alejandro Matute </p>
</footer>

</footer>
</body>
</html>
