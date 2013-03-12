<?php


$settings['text_from_file'] = '';


$settings['quotes'] = array(
'<b id="statement">answer : </b> I don\'t think so!',
'<b id="statement">answer : </b> Heck yeah!',
'<b id="statement">answer : </b> Very Unlikely',
'<b id="statement">answer : </b> Are you crazy?',
'<b id="statement">answer : </b> For sure!',
'<b id="statement">answer : </b> Sure...when pigs fly!',
'<b id="statement">answer : </b> Well that\'s just a silly question!',
'<b id="statement">answer : </b> There is no doubt in my mind',
'<b id="statement">answer : </b> Do bears shit in the woods?',
'<b id="statement">answer : </b> Ask again, I\'m thinking...',
'<b id="statement">answer : </b> There is just no way in hell',
'<b id="statement">answer : </b> Absolutely!',
'<b id="statement">answer : </b> Highly unlikely',
'<b id="statement">answer : </b> All signs say yes',
'<b id="statement">answer : </b> Absolutely not!',
'<b id="statement">answer : </b> YES!',
'<b id="statement">answer : </b> NO!',
'<b id="statement">answer : </b> Maybe!',
'<b id="statement">answer : </b> No. I don\'t think so',
'<b id="statement">answer : </b> When Hell freezes over!',
'<b id="statement">answer : </b> Nope. Don\'t think so',
'<b id="statement">answer : </b> Possibly...maybe',
'<b id="statement">answer : </b> No. No. No!',

);


$settings['display_type'] = 1;


$settings['allow_otf'] = 1;

if ($settings['allow_otf'] && isset($_GET['type']))
{
	$t = intval($_GET['type']);
}
else
{
	$t = $settings['display_type'];
}


if ($settings['text_from_file'])
{
	$settings['quotes'] = file($settings['text_from_file']);
}


if (count($settings['quotes']))
{
	$answer = $settings['quotes'][array_rand($settings['quotes'])];
}
else
{
	$txr = 'No text to choose from';
}

{
	echo $answer;
}
?>
