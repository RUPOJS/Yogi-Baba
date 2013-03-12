<!DOCTYPE html>
<html>
<head>
  <title>Yogi Baba - Answers to all of your Questions</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>
<body>
<!-- begin the main container -->
	<div id="container">
		<div>
		<h1>Hello,I'm Yogi Baba!</h1>
		<a href="../index.php" title="Click here to start over again!"><img width="400px" src="../images/1.png" alt="Yogi baba"></a>
		<h2>Ask me anything. I'll give you correct answers.</h2>
		</div>
			<div style="margin-top:-10px;">
			<form>
			<input id="questions" type="text" onfocus="if(this.value === '  Enter any question that can be answered by YES or NO') { this.value = ''; }" value="  Enter any question that can be answered by YES or NO" />
			</form>
			</div>
				<div style="margin-top:30px;">
				<a id="buttonlink" href="<?php $_SERVER['PHP_SELF']; ?>"><span id="submitbutton">submit</span></a>
				</div>
		<div id="answers">
		<?php include "answers.php" ; ?>
		</div>
	</div>
<!-- end the container -->
</body>
</html>
