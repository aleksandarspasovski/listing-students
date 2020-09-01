create database school;

create table students(
	id int primary key auto_increment not null,
	name varchar(255) not null,
	average varchar(255) not null,
	result varchar(255) not null,
	foreign key (id) references grades(grades_id)
);
create table grades(
	id int primary key auto_increment not null,
	student_grades varchar(255),
	grades_id int
);

-- select students.id, students.name, students.average, students.result, avg(grades.student_grades), grades.grades_id from students join grades on students.id = grades.grades_id;

