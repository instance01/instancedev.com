<?php ob_start("ob_gzhandler"); ?>
<?php
include("config.php");

// mysql connect
connect();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="InstanceLabs">
<meta name="description" content="Development and Project Website of InstanceLabs">
<title>InstanceLabs Development Website</title>

<!-- u so kewl u checked src -->

<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="jquery-letterfx.min.css">
<link rel="stylesheet" type="text/css" href="s/css/semantic.min.css">
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-letterfx.min.js"></script>
<script type="text/javascript" src="s/javascript/s.js"></script>
<script type="text/javascript" src="s/javascript/jquery.address.js"></script>
<script type="text/javascript" src="clear.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$('.header_').letterfx({"fx":"swirl", "fx_duration":"200ms"});
	$('.main.menu').fadeOut(0);
	$('.main.menu').fadeIn(1500);


	$('.main.menu .item').tab();
	$('a.red').click(function(e) {
		$('.main.menu .item').tab('change tab', 'home');
	});
	$('a.blue').click(function(e) {
		$('.main.menu .item').tab('change tab', 'projects');
	});
	$('a.green').click(function(e) {
		$('.main.menu .item').tab('change tab', 'contact');
	});
	$('.about').click(function(e) {
		$('.main.menu .item').tab('change tab', 'contact');
	});
	
	$('.github').click(function(e) {
		location.href = "https://github.com/instance01";
	});
	$('.skype').click(function(e) {
		location.href = "skype:rubikonoff?chat";
	});
	$('.bukkit').click(function(e) {
		location.href = "http://dev.bukkit.org/profiles/instancelabs/";
	});

	$(".java").progressbar({value: 90});
	$(".dotnet").progressbar({value: 90});
	$(".cplusplus").progressbar({value: 30});
	$(".web").progressbar({value: 75});
	$(".flash").progressbar({value: 55});
	$(".autoit").progressbar({value: 15});
	$(".python").progressbar({value: 10});
	$(".unity").progressbar({value: 35});
});

</script>

</head>
<body>

<div class="ui pointing inverted secondary main menu">
  <a class="active red item" data-tab="home">Home</a>
  <a class="blue item" data-tab="projects">Projects</a>
  <a class="green item" data-tab="contact">Contact</a>
  <div class="right menu">
  <a class="green item" href="youtubedl/YoutubeDownloader.php">Youtube Download</a>
  <a class="green item" href="radio/">Radio</a>
  <a class="green item" href="bukkitstats/">BukkitStats</a>
  <a class="green item" href="bukkitsnippets/">BukkitSnippets</a>
  </div>
</div>
<div class="ui active tab" data-tab="home">
    <div class="content">
    <center>
    <div class="header">
    <p class="header_">What's up! I'm InstanceLabs and this is my website.</p>
    <p>
    <div class="ui small red animated fade button about">
        <div class="visible content">About Me</div>
        <div class="hidden content">
        <i class="down arrow icon"></i>
        </div>
    </div>
    </p>
    </div>
    </center>
    </div>
</div>
<div class="ui tab" data-tab="projects">
<div class="ui two column page grid">


<?php
$result = mysql_query("SELECT * FROM posts ORDER BY id") or die(mysql_error()); 

$currentpost = "";
$count = 0;
while($row = mysql_fetch_array($result)){
	$p1 = $row['title'];
	$p2 = $row['imgurl'];
	$p3 = $row['description'];
	$p4 = $row['type'];
	$p5 = $row['projurl'];
	$date = $row['date'];
	$currentpost = '<div class="ui row"><div class="ui left floated two wide column"><a href="'.$p5.'"><img class="ui large left floated image" src="'.$p2.'" alt="'.$p1.' preview Image"></a></div>';
	$currentpost .= '<div class="ui right floated two wide column"><h3>'.$p1.'</h3><h4><span class="ui small green button">'.$p4.'</span><a class="ui animated small teal button" href="'.$p5.'"><div class="visible content">Visit Project <i class="angle right icon"></i></div><div class="hidden content"><i class="right arrow icon"></i></div></a></h4>';
	$currentpost .= '<p>'.$p3.'</p></div></div>';
	echo($currentpost);
	$count += 1;
}

?>
<br><br>
<hr>
<footer>
<p style="font-size: 11px">Copyright &copy; InstanceLabs 2013-2014 &middot; <a href="http://github.com/instance01/">Github</a> &middot; <a href="http://dev.bukkit.org/profiles/instancelabs/">Bukkit Dev</a> &middot; <a href="http://instancelabs.eu5.org/">Old website</a></p>
</footer>
</div>
</div>
<div class="ui tab" data-tab="contact">
<center>
<i class="circular huge github alternate icon link icon rotate"></i>
<i class="circular huge skype icon link icon rotate"></i>
<i class="circular huge icon link icon rotate"><img src="bukkit_gray.png" class="bukkit"></i>
<i class="circular huge icon link icon">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="3RUB6894S84TY">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>
</i>

<br>
<p>I'm a passionate developer programming in the following languages.</p>
<p>If you are interested in private projects, contact me on Skype.</p>
<br><br>
</center>

<div class="ui page grid">
<div class="ui left floated two wide column"></div>
<div class="ui left floated eleven wide column">
<div class="ui two column page grid">
    <div class="ui row">
    	<div class="ui left floated column rightaligned">
            Java
        </div>
    	<div class="ui right floated column">
        	<div class="ui-progressbar java"></div>
        </div>
    </div>
    
    <div class="ui row">
        <div class="ui left floated two wide column rightaligned">
            .NET (C#/VB)
        </div>
    	<div class="ui right floated two wide column">
            <div class="ui-progressbar dotnet"></div>
        </div>
    </div>
    
    <div class="ui row">
        <div class="ui left floated two wide column rightaligned">
            C++
        </div>
    	<div class="ui right floated two wide column">
            <div class="ui-progressbar cplusplus"></div>
        </div>
    </div>
    
    <div class="ui row">
    	<div class="ui left floated two wide column rightaligned">
            Web (HTML5, CSS3, jQuery/JS, MySQL, PHP)
        </div>
    	<div class="ui right floated two wide column">
            <div class="ui-progressbar web"></div>
        </div>
    </div>
    
    <div class="ui row">
    	<div class="ui left floated two wide column rightaligned">
            ActionScript/Flash
        </div>
    	<div class="ui right floated two wide column">
            <div class="ui-progressbar flash"></div>
        </div>
    </div>
    
    <div class="ui row">
   		<div class="ui left floated two wide column rightaligned">
            AutoIt
        </div>
    	<div class="ui right floated two wide column">
            <div class="ui-progressbar autoit"></div>
        </div>
    </div>
    
    <div class="ui row">
    	<div class="ui left floated two wide column rightaligned">
            Python
        </div>
    	<div class="ui right floated two wide column">
            <div class="ui-progressbar python"></div>
        </div>
    </div>
    
    <div class="ui row">
   		<div class="ui left floated two wide column rightaligned">
        	Unity3D/Blender
        </div>
    	<div class="ui right floated two wide column">
            <div class="ui-progressbar unity"></div>
        </div>
    </div>
</div>
</div>
<div class="ui right floated four wide column"></div>

<div class="ui row"></div>

<div class="ui row">
    <br><br><br><br><hr>
    <footer>
    <p style="font-size: 11px">Copyright &copy; InstanceLabs 2013-2014 &middot; <a href="http://github.com/instance01/">Github</a> &middot; <a href="http://dev.bukkit.org/profiles/instancelabs/">Bukkit Dev</a> &middot; <a href="http://instancelabs.eu5.org/">Old website</a></p>
    </footer>
</div>

</div>

</div>


</body>
</html>