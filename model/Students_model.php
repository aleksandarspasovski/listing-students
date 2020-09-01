<?php 

class Students_model 
{
	public function gradesCount($id)
	{
		require('./db.php');
		$sql = 'select students.id, students.name, avg(grades.student_grades) as average_grades, grades.grades_id from students left join grades on students.id = grades.grades_id where students.id = "'.$id.'"';
		$res = $db->query($sql);
		$result = $res->fetch_assoc();
		var_dump($result);

		if ($result['average_grades'] >= 7) {
			$av_res = 'passed';
		} else{
			$av_res = 'failed';
		}
		if ($result) {
			$query = 'update students set average = "'.$result['average_grades'].'", result = "'.$av_res.'" where id = "'.$id.'"';
			$res = $db->query($query);
		}
		return $result;
	}
	public function showUser($id)
	{
		require('./db.php');
		$sql = 'select * from students where id = "'.$id.'" ';
		$res = $db->query($sql);
		$result = $res->fetch_assoc();
		return $result;
	}
}