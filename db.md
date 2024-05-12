describe admin;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| admin_id | int          | NO   | PRI | NULL    | auto_increment |
| username | varchar(127) | NO   | UNI | NULL    |                |
| password | varchar(255) | NO   |     | NULL    |                |
| fname    | varchar(127) | NO   |     | NULL    |                |
| lname    | varchar(127) | NO   |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+


describe class;
+----------+------+------+-----+---------+----------------+
| Field    | Type | Null | Key | Default | Extra          |
+----------+------+------+-----+---------+----------------+
| class_id | int  | NO   | PRI | NULL    | auto_increment |
| grade    | int  | NO   |     | NULL    |                |
| section  | int  | NO   |     | NULL    |                |
+----------+------+------+-----+---------+----------------+


describe grades;
+------------+-------------+------+-----+---------+----------------+
| Field      | Type        | Null | Key | Default | Extra          |
+------------+-------------+------+-----+---------+----------------+
| grade_id   | int         | NO   | PRI | NULL    | auto_increment |
| grade      | varchar(31) | NO   |     | NULL    |                |
| grade_code | varchar(7)  | NO   |     | NULL    |                |
+------------+-------------+------+-----+---------+----------------+


describe message;
+------------------+--------------+------+-----+-------------------+-------------------+
| Field            | Type         | Null | Key | Default           | Extra             |
+------------------+--------------+------+-----+-------------------+-------------------+
| message_id       | int          | NO   | PRI | NULL              | auto_increment    |
| sender_full_name | varchar(100) | NO   |     | NULL              |                   |
| sender_email     | varchar(255) | NO   |     | NULL              |                   |
| message          | text         | NO   |     | NULL              |                   |
| date_time        | datetime     | NO   |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
+------------------+--------------+------+-----+-------------------+-------------------+


describe registrar_office;
+-----------------+--------------+------+-----+-------------------+-------------------+
| Field           | Type         | Null | Key | Default           | Extra             |
+-----------------+--------------+------+-----+-------------------+-------------------+
| r_user_id       | int          | NO   | PRI | NULL              | auto_increment    |
| username        | varchar(127) | NO   |     | NULL              |                   |
| password        | varchar(255) | NO   |     | NULL              |                   |
| fname           | varchar(31)  | NO   |     | NULL              |                   |
| lname           | varchar(31)  | NO   |     | NULL              |                   |
| address         | varchar(31)  | NO   |     | NULL              |                   |
| employee_number | int          | NO   |     | NULL              |                   |
| date_of_birth   | date         | NO   |     | NULL              |                   |
| phone_number    | varchar(31)  | NO   |     | NULL              |                   |
| qualification   | varchar(31)  | NO   |     | NULL              |                   |
| gender          | varchar(7)   | NO   |     | NULL              |                   |
| email_address   | varchar(255) | NO   |     | NULL              |                   |
| date_of_joined  | datetime     | NO   |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
+-----------------+--------------+------+-----+-------------------+-------------------+


describe section;
+------------+------------+------+-----+---------+----------------+
| Field      | Type       | Null | Key | Default | Extra          |
+------------+------------+------+-----+---------+----------------+
| section_id | int        | NO   | PRI | NULL    | auto_increment |
| section    | varchar(7) | NO   |     | NULL    |                |
+------------+------------+------+-----+---------+----------------+


describe setting;
+------------------+--------------+------+-----+---------+----------------+
| Field            | Type         | Null | Key | Default | Extra          |
+------------------+--------------+------+-----+---------+----------------+
| id               | int          | NO   | PRI | NULL    | auto_increment |
| current_year     | int          | NO   |     | NULL    |                |
| current_semester | varchar(11)  | NO   |     | NULL    |                |
| school_name      | varchar(100) | NO   |     | NULL    |                |
| slogan           | varchar(300) | NO   |     | NULL    |                |
| about            | text         | NO   |     | NULL    |                |
+------------------+--------------+------+-----+---------+----------------+


describe student_score;
+------------+--------------+------+-----+---------+----------------+
| Field      | Type         | Null | Key | Default | Extra          |
+------------+--------------+------+-----+---------+----------------+
| id         | int          | NO   | PRI | NULL    | auto_increment |
| semester   | varchar(100) | NO   |     | NULL    |                |
| year       | int          | NO   |     | NULL    |                |
| student_id | int          | NO   |     | NULL    |                |
| teacher_id | int          | NO   |     | NULL    |                |
| subject_id | int          | NO   |     | NULL    |                |
| results    | varchar(512) | NO   |     | NULL    |                |
+------------+--------------+------+-----+---------+----------------+


describe students;
+---------------------+--------------+------+-----+-------------------+-------------------+
| Field               | Type         | Null | Key | Default           | Extra             |
+---------------------+--------------+------+-----+-------------------+-------------------+
| student_id          | int          | NO   | PRI | NULL              | auto_increment    |
| username            | varchar(127) | NO   | UNI | NULL              |                   |
| password            | varchar(255) | NO   |     | NULL              |                   |
| fname               | varchar(127) | NO   |     | NULL              |                   |
| lname               | varchar(255) | NO   |     | NULL              |                   |
| grade               | int          | NO   |     | NULL              |                   |
| section             | int          | NO   |     | NULL              |                   |
| address             | varchar(31)  | NO   |     | NULL              |                   |
| gender              | varchar(7)   | NO   |     | NULL              |                   |
| email_address       | varchar(255) | NO   |     | NULL              |                   |
| date_of_birth       | date         | NO   |     | NULL              |                   |
| date_of_joined      | timestamp    | YES  |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
| parent_fname        | varchar(127) | NO   |     | NULL              |                   |
| parent_lname        | varchar(127) | NO   |     | NULL              |                   |
| parent_phone_number | varchar(31)  | NO   |     | NULL              |                   |
+---------------------+--------------+------+-----+-------------------+-------------------+


describe subjects;
+--------------+-------------+------+-----+---------+----------------+
| Field        | Type        | Null | Key | Default | Extra          |
+--------------+-------------+------+-----+---------+----------------+
| subject_id   | int         | NO   | PRI | NULL    | auto_increment |
| subject      | varchar(31) | NO   |     | NULL    |                |
| subject_code | varchar(31) | NO   |     | NULL    |                |
| grade        | int         | NO   |     | NULL    |                |
+--------------+-------------+------+-----+---------+----------------+


describe teachers;
+-----------------+--------------+------+-----+-------------------+-------------------+
| Field           | Type         | Null | Key | Default           | Extra             |
+-----------------+--------------+------+-----+-------------------+-------------------+
| teacher_id      | int          | NO   | PRI | NULL              | auto_increment    |
| username        | varchar(127) | NO   | UNI | NULL              |                   |
| password        | varchar(255) | NO   |     | NULL              |                   |
| class           | varchar(31)  | NO   |     | NULL              |                   |
| fname           | varchar(127) | NO   |     | NULL              |                   |
| lname           | varchar(127) | NO   |     | NULL              |                   |
| subjects        | varchar(31)  | NO   |     | NULL              |                   |
| address         | varchar(31)  | NO   |     | NULL              |                   |
| employee_number | int          | NO   |     | NULL              |                   |
| date_of_birth   | date         | YES  |     | NULL              |                   |
| phone_number    | varchar(31)  | NO   |     | NULL              |                   |
| qualification   | varchar(127) | NO   |     | NULL              |                   |
| gender          | varchar(7)   | NO   |     | NULL              |                   |
| email_address   | varchar(255) | NO   |     | NULL              |                   |
| date_of_joined  | datetime     | NO   |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
+-----------------+--------------+------+-----+-------------------+-------------------+
