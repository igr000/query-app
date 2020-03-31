<!DOCTYPE html>
<!---------------------------------------------------------------------------------------------
-- Query_form_enrolled_students page is the page where you will be able to choose the date ----
-- range of the records you wanted to view. ---------------------------------------------------
-----------------------------------------------------------------------------------------------
-- Author: Irene Gayle Roque ------------------------------------------------------------------
---------------------------------------------------------------------------------------------->
<html>
<head>
	<title><?php echo $title; ?></title>
	<!--- Styles ----->
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
		.form-input{
			padding: 10px;
			margin: 5px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<!--- Let's you choose date range ---------->
	<div class="form">
	<h1><?php echo $title; ?></h1>
	<hr>
	<?php echo form_open('query/enrolled_students/view'); ?>
	<label>Select Start Date</label>
	<br>
	<input type="date" name="txtdatestart" class="form-input"> <br>

	<label>Select End Date</label>
	<br>
	<input type="date" name="txtdateend" class="form-input"><br>

	<?php echo form_submit('btnsubmit', 'Submit', ' class="form-input"'); ?>
	<?php echo form_close();?>
    </div>
</body>
</html>