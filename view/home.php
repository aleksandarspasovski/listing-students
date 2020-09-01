<?php 
require('./db.php');
$sql = 'select * from students';
$res = $db->query($sql);

?>
<a href="./students">Students</a>
	<form action="/students" method="get">
			<!-- <input type="text" name=""> -->
	</form>
	<div>
		<table border="1px"  cellpadding="10" cellspacing="0">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>average</th>
					<th>result</th>
					<th>Check user</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($result = $res->fetch_assoc()) :?>
					<tr>
						<td><?php echo $result['id']; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['average']; ?></td>
						<td><?php echo $result['result']; ?></td>
						<td><a href="<?php echo URL; ?>students/student/<?php echo $result['id']; ?>">Check user</a></td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>

	</div>