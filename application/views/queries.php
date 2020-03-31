<!DOCTYPE html>
<!---------------------------------------------------------------------------------------------
-- Queries page is the first page that you'll see on this web application. --------------------
-----------------------------------------------------------------------------------------------
-- Author: Irene Gayle Roque ------------------------------------------------------------------
---------------------------------------------------------------------------------------------->
<html>
<head>
	<title><?php echo $title; ?></title>
	<style type="text/css">
		html{
			background-color: #C8E5EE;

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
		<li><a href="<?php echo base_url('query/enrolled_students'); ?>">Enrolled Students</a></li>
	</ul>
    </div>

</body>
</html>