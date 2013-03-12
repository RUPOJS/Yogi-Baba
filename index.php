<!DOCTYPE html>
<html>
<head>
  <title>Ask Yogi Baba!</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="answers/style.css" type="text/css" media="screen" />
</head>
<body>
<!-- begin the main container -->
	<div id="container">
		<div>
		<h1>Hello, I'm Yogi Baba!</h1>
		<a href="<?php $_SERVER['PHP_SELF']; ?>" title="Click here to start over again!"><img width="400px" src="images/1.png" alt="Yogi baba"></a>
		<h2>Ask me anything. I'll give you correct answers</h2>
		</div>
			<div style="margin-top:-10px;">
			<form name="baba" action="answers/baba.php" onsubmit="baba.php">
			<input id="questions" type="text" onfocus="if(this.value === '  Enter any question that can be answered by YES or NO') { this.value = ''; }" value="  Enter any question that can be answered by YES or NO" />
			</form>
			</div>
		<div style="margin-top:30px;">
		<a id="buttonlink" href="answers/baba.php"><span id="submitbutton">submit</span></a>
		</div>
	</div>
<!-- end the container -->
</body>
</html>