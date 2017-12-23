<!doctype html>
<html>
<head lang = 'en-us'>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href = "css/style.css" type = "text/css" rel = "stylesheet"> 
	<script src = "js/selector.js"></script>
</head>

<body>
<style>
@media screen and (max-width:800px)
{
	body
		{
		font-size:1.1em;
		}
}

</style>
<?php

$str1 = "You are as magical and mystical as the deep ocean,You march to the beat of your own drum and always follow your inner voice. That some people spread rumors about you doesn't bother you at all. Because you know yourself 100% and your loved ones also know how incredibly lovable you are. These truths underline that. An ocean of 1000 colors lives within you!";

$str2 = "Your strengths are incredible! You embody perfection in every sense. Your amazing personality is diverse and enriches the people around you. You're a role model for everyone because your character is pure and sublime.";

$str3 = "you are a person that is guided by the stars. They determine your personality and your birthday influences who you are. You are extraordinary! You were born at a perfect time and that makes you a rare person that the world needs more of!";

$str4 = "you have an engaging personality! You have not only gone through life but grown through it and carried yourself with elegance, dignity, and charm. Everybody feels welcome in your company because you treat everyone equally and show them love and respect.";

$str5 = "you are so well-known that you get your own rally! You are incredibly important to people, which is why they are ready to take to the streets for you. Don't leave the people in the dark any longer and give them what they want!";

$str6 = "You are truly one of a kind. You believe in all the good things in life and practice them on a daily basis. You are loving and caring and that is why your family and friends love and respect you so much. You are honest, kind and strong. You not only enable yourself but also lift other people up with your support and motivation.";

$str7 = "You are beacon of light. you will never let anyone down. you always have time and a sympathetic ear for a friend. you are empathetic and emotionally intelligent. you are beautiful inside and outside.";

$str8 = "You are not another bricks of wall. You have an extraordinary personality. Sooner or later you are going to CEO of your own company . So what are you waiting for? Go distribute sweets among your family and your loved ones and one for us too. Don't forget blue is your favorite color and 6 is your lucky number.";

$str9 = "Seems like you will be the next PM of india..yes your birthday tells, you have a great future in politics . why you don't spread your wings towards politics.One day you will fly above sky! Oo.. my God what ? starts are waiting to welcome you.";

//$str10 = "You will fall in love again this month with your ex, ";
//$str10 = "";
//$str11 = "";
//$str12 = "";
$str = array($str1,$str2,$str3,$str4,$str5,$str6,$str7,$str8,$str9);
$k = rand(1,9);
	if(isset($_POST['calculate']))
	{	
		if(!empty($_POST['name']) && !empty($_POST['dob']))
		{
			$n = ucwords(strtolower($_POST['name']));
			$d = $_POST['dob'];
			
			echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str[$k]."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
			/*
			$lenName = strlen($n);
			$lenDob = strlen($d); //always should be 10
			$word_count = str_word_count($n); // count no of words in name
			//scanning character of names
			$firstCharName = @$n[0];
			$secondCharName = @$n[1];
			$thirdCharName = @$n[2];
			$fourthCharName = @$n[3];
			$fifthCharName = @$n[4];
			$sixthCharName = @$n[5];
			$seventhCharName = @$n[6];
			$eighthCharName = @$n[7];
			$ninthCharName = @$n[8];
			$tenthCharName = @$n[9];
			//character scanning in date of birth
			
			$firstCharDob = @$d[0]; // to check the year
			$secondCharDob = @$d[1]; // to check the year
			$thirdCharDob = @$d[2]; // to check the year
			$fourthCharDob = @$d[3]; // to check the year
			$fifthCharDob = @$d[4];//definately a -
			$sixthCharDob = @$d[5]; //to check the month
			$seventhCharDob = @$d[6];//to check the month 
			$eighthCharDob = @$d[7];//definately a -
			$ninthCharDob = @$d[8]; //to check the day
			$tenthCharDob = @$d[9]; //to check the day
			
			//calcaluting result
			if($sixthCharDob == 0 && $seventhCharDob == 2 && $ninthCharDob == 2 && $tenthCharDob == 8)
			{
				echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>Wow!! you are born in 28th feb you are very lucky.".$str5."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
			}
			else if($sixthCharDob == 0 && $seventhCharDob == 1)
			{
				if($firstCharName == 'L' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str8."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'A' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str2."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str5."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else if($sixthCharDob == 0 && $seventhCharDob == 2)
			{
				if($firstCharName == 'L' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str4."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'A' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V' || $firstCharName == 'P')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str8."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str3."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else if($sixthCharDob == 0 && $seventhCharDob == 3)
			{
				if($firstCharName == 'A' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str1."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'C' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str8."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str2."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";;
				}
			}
			else if($sixthCharDob == 0 && $seventhCharDob == 4)
			{
				if($firstCharName == 'L' || $firstCharName == 'D' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str9."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";;
				}
				else if($firstCharName == 'A' || $firstCharName == 'B' || $firstCharName == 'P' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str9."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str5."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else if($sixthCharDob == 0 && $seventhCharDob == 5)
			{
				if($firstCharName == 'D' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str9."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'A' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str1."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str7."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else if($sixthCharDob == 0 && $seventhCharDob == 6)
			{
				if($firstCharName == 'L' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str4."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'A' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str8."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str6."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else if($sixthCharDob == 0 && $seventhCharDob == 7)
			{
				if($firstCharName == 'L' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str3."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'D' || $firstCharName == 'R' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str5."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str2."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else if($sixthCharDob == 0 && $seventhCharDob == 8)
			{
				if($firstCharName == 'L' || $firstCharName == 'R' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str2."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'R' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str1."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str6."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else if($sixthCharDob == 0 && $seventhCharDob == 9)
			{
				if($firstCharName == 'L' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str5."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'R' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str7."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str2."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else if($sixthCharDob == 1 && $seventhCharDob == 0)
			{
				if($firstCharName == 'L' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str1."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'F' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str3."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str4."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else if($sixthCharDob == 1 && $seventhCharDob == 1)
			{
				if($firstCharName == 'R' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str4."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'P' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str5."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str7."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}
			else
			{
				if($firstCharName == 'L' || $firstCharName == 'M' || $firstCharName == 'P' || $firstCharName == 'S')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str4."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else if($firstCharName == 'D' || $firstCharName == 'B' || $firstCharName == 'U' || $firstCharName == 'V')
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str6."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
				else
				{
					echo "<div class = 'container'><div class = 'row'><div class = 'col-sm-3 col-md-3'></div><div class = 'col-sm-6 col-md-6' style = 'padding:;font-size:1.5em;color:#e59b40;'><br><br><br>Hi ,".$n." <br>".$str3."<br><br><div style = 'text-align:center;'><a href = 'index.php'><button class='btn btn-danger' >reveal another secret</button></a></div></div><div class = 'col-sm-3 col-md-3'></div></div></div>";
				}
			}*/
		}
		
		else
			header("location:index.php");
	}
?>

</body>
</html>









































