<!DOCTYPE html>
<!---------------------------------------------------------------------------------------------
-- Query_enrolled_students page is the page where the student records will be displayed. ------
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
		.table{
			border-color: #216B82;
			margin:50px;
			padding:35px;
			background-color: #F6F7F7;
			border-radius: 15px;
		}
	</style>
</head>
<body>
	<div class="table">
	<h1>Query Enrolled Students</h1>
	<hr>
	<table>
		<tr>
			<!-- Column titles ---->
			<th>Student ID</th>
			<th>Lastname</th>
			<th>Firstname</th>
		</tr>

    <!-- Get records from report_lookup_model based on date range chosen from query_form_enrolled_students page and display records as rows -------->
	<?php foreach($students as $student): extract($student); ?>
		
		<tr>
			<td><?php echo $stud_id; ?></td>
			<td><?php echo $this->report_lookup_model->r_value('students', 'stud_id', $stud_id, 'stud_lname'); ?></td>
			<td><?php echo $this->report_lookup_model->r_value('students', 'stud_id', $stud_id, 'stud_fname'); ?></td>
			<td><?php echo date('F d, Y', strtotime($enr_dateEnrolled)); ?></td>

		</tr>

	<?php endforeach; ?>
	</table>
    </div>
	<hr>
	<em>Total Records: <strong><?php echo count($students); ?></strong> student(s)</em>

</body>
</html>