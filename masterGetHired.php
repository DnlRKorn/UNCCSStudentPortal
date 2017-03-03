<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
}


body {height:975px;}
hr {margin-top:300px;}


div.first {
	text-align: center; display:block; }
div.second {
        text-align: center; display:block; }
div.third {
        text-align: center; display:block; }
</style>
</head>
<body>
<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="gethired.php">Post Job</a></li>
  <li><a href="faq.html">FAQ</a></li>
  <li><a href="#about">About</a></li>
</ul>



<div class="first"> 
<p> Test</p>
</div>

<hr>

<div class="second">
<p> Just some text.. </p>
</div>

<hr>

<div class="third">
<p> Just some text.. </p>
</div>

<script>
</script>

<? php
$x = "Hello world!";
$y = "Hello world!";

echo $x;
echo "<br>";
echo $y;
?>

</body>
</html>
