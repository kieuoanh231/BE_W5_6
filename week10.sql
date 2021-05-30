a) SELECT * FROM users JOIN `type` TO users.type_id = type.type_id WHERE type_name = "Giảng viên"
b) SELECT * FROM users JOIN `type` TO users.type_id = type.type_id WHERE type_name = "Sinh Viên"
c) SELECT * FROM courses
d) SELECT * FROM courses JOIN class to courses.course_id = class.course_id
						 WHERE class_users.teacher_id INTO( (SELECT users.user_id FROM users WHERE users.user_name = "Nguyễn Văn A"))
						 GROUP BY courses.course_name
						 
e) SELECT * FROM users JOIN class to users.user_id = class_users.user_id
					   JOIN courses to courses.course_id = class.course_id
					   WHERE class_users.teacher_id INTO( (SELECT users.user_id FROM users WHERE users.user_name = "Nguyễn Văn A"))
					   AND courses.course_name = "Thực tập doanh nghiệp";
f) SELECT * FROM companies JOIN trainers ON companies.company_id=trainer.company_id
			   	JOIN users ON trainers.trainer_id = user.trainer_id
				WHERE class_users.teacher_id INTO( (SELECT users.user_id FROM users WHERE users.user_name = "Nguyễn Văn A"))
				AND courses.course_name = "Thực tập doanh nghiệp" AND M.course_year = "2021" AND M.course_semester = 1;
g)SELECT * FROM diary JOIN users to diary.user_id = users.user_id WHERE users.user_name = "Nguyễn Văn A"
h)
SELECT D.`diary_id`,D.`diary_name`,U.`user_name` AS `Student name`,C.`class_name`,M.`course_name`,M.`course_semester`,M.`course_year`,U2.`user_name` AS `Teacher`
 FROM `diaries` AS D
JOIN `users` AS U
 ON D.`user_id` = U.`user_id`
JOIN `classes_users` AS CU
 ON U.`user_id` = CU.`user_id`
JOIN `classes` AS C
 ON CU.`class_id` = C.`class_id`
JOIN `courses` AS M
 ON C.`course_id` = M.`course_id`
JOIN `users` AS U2
 ON C.`user_id` = U2.`user_id`
 WHERE (M.course_year = "2021" AND M.course_semester = 1 AND courses.course_name = "Thực tập doanh nghiệp")
i)
SELECT
ct.diarycontent_teacher_comment AS teacher_comment
FROM diarycontents AS dc
JOIN weeks AS w
ON w.week_id = dc.week_id 
JOIN diaries AS d
ON d.diary_id = w.diary_id
Join users AS u
ON d.user_id = u.user_id 
JOIN classes AS cl
ON cl.class_id = u.class_id
JOIN courses AS cr
ON cr.course_id = cl.course_id
Where  u.user_name = 'Nguyễn Văn B'
AND cr.name='2021' and cr.semester = 1
j)
SELECT users.user_id, users.user_name, diaryContent.diaryContent_trainer_comment FROM (
    (users JOIN type ON users.type_id = type.type_id WHERE type.type_name='student' AND users.user_name='Nguyen Van B')
    JOIN classes_users clu ON users.user_id = clu.user_id
    JOIN classes ON clu.class_id = classes.class_id
    JOIN courses ON classes.course_id = courses.course_id
    ) AS student
    JOIN diary ON student.user_id = diary.user_id
    JOIN weeks ON diary.diary_id = weeks.diary_id
    JOIN diaryContent ON weeks.week_id = diaryContent.week_id
    WHERE courses.course_year='2020-2021' AND courses.course_semedter='1'