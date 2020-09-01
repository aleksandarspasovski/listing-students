<p>students page</p>

<?php 
require('./db.php');
$sql = 'select students.id, students.name, students.average, students.result, grades.student_grades, grades.grades_id from students join grades on students.id = grades.grades_id';
$res = $db->query($sql);
$count = $res->fetch_assoc();
?>
<a href="./students">Students</a>
	<div>
		<table border="1px"  cellpadding="10" cellspacing="0">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>average</th>
					<th>result</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($result = $res->fetch_assoc()) :?>
					<tr>
						<td><?php echo $this->user['id']; ?></td>
						<td><?php echo $this->user['name']; ?></td>
						<td><?php echo $this->user['average']; ?></td>
						<td><?php echo $this->user['result']; ?></td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
	<br>
	<form action="<?php echo URL; ?>students/count/<?php echo $this->user['id']; ?>" method="get">
		<label>Count average</label>
		<input type="Submit" value="Count">
	</form>