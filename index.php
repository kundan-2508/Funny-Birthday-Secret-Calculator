<!doctype html>
<html lang = 'en-us'>
<head>
<meta charset = 'utf-8'/>
<title>Birthday Secret Calculator</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href = "css/style.css" type = "text/css" rel = "stylesheet"> 
  <script src = "js/selector.js"></script>
</head>
<body>

<!--heading section starts here-->
<div class = "container">
	<div class = 'row'>
		<br><br><h1 class = "heading">Unbox your birthday secret</h1>
	</div>
</div>
<!--heading section end here-->

<!--heading image section starts here-->
<div class = "container">
	<div class = 'row'>
		<div class = "col-sm-4 col-md-4"></div>
		<div class = "col-sm-4 col-md-4" style = "padding:5%;">
			<img src = "img/unbox.png"class = "img-responsive"/>
		</div>
		<div class = "col-sm-4 col-md-4"></div>
	</div>
</div>
<!--heading image section end here-->

<!--input section starts here-->
<div class = "container">
	<div class = 'row'>
		<div class = "col-sm-4 col-md-4"></div>
		<div class = "col-sm-4 col-md-4" style = "padding:;">
			<form action="secret.php" method = "POST" name = "inputForm">
				<div class="form-group">				  
				  <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required pattern="[a-zA-Z .]{1,30}" title="Only Alphabets and dots Allowed" onkeyup="limitTXT(this.value);"/>
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" id="dob" placeholder="YYYY-MM-DD" name="dob" required pattern = "(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title = "Invalid date"/>
				</div>
				<div style = "text-align:center;">
				<input type="submit" name = "calculate" class="btn btn-danger" value = "Unbox secret"/>
				</div>
			</form>
		</div>
		<div class = "col-sm-4 col-md-4"></div>
	</div>
</div>
<!--input section end here-->
<style>
@media screen and (max-width:800px)
{
	body
		{
		font-size:1em;
		}
}
input[type=text] {
    
    box-sizing: border-box;
	border-top:none;
	border-left:none;
	border-right:none;
	border-bottom: 2px solid #black;
	text-align:center;
	background:transparent;
    border-radius:0;
	color:grey;
}
</style>
<!--footer section starts here-->
<br>
<hr>
<div class = "container">
<p style = "text-align:center;color:#fff;font-size:1.5em;">Made with love by <a href = "https://www.facebook.com/kumar.kundan.77736" target = "_blank">Kundan Kumar</a></p>
</div>



<!--footer section end here-->


 </body>
</html>