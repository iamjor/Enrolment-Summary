<!DOCTYPE html>
<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!-- Queries page is the first page that you'll see on this web application. -->
<html>
<head>
	<title><?php echo $title; ?></title>
	<style type="text/css">
		html{
			background-color: #1c37bb;

		}
		.form{
			margin:50px;
			padding:35px;
			background-color: #F6F7F7;
			border-radius: 15px;
		}
		
	</style>
</head>
<body>
	<div class="form">
	<h1>Queries</h1>
	<hr>
	<ul>
		<li><a href="<?php echo base_url('query/Enrolment_Summary'); ?>">Enrolment Summary</a></li>
	</ul>
    </div>

</body>
</html>