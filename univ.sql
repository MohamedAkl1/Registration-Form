create database University ;
create TABLE Department
(
  dept_id int auto_increment not null unique ,
  primary key (dept_id),
  dept_name varchar(50) unique  not null  ,
  dept_describtion varchar(255)
  );

create table user
(
  dept_id int,
  user_id int auto_increment not null unique,
  primary key (user_id),
  registration_date datetime,
  e_mail varchar(50) ,
  user_password varchar(50) default '12345678' ,
  foreign key (dept_id) references Department(dept_id),
  username varchar(50) not null
  );

create table course
(
  dept_id int,
  course_id int auto_increment not null unique,
  primary key (course_id) ,
  course_name varchar(50) not null unique,
  course_describtion varchar(255) ,
  instructor_name varchar(50) not null ,
  credit_hours int not null ,
  foreign key(dept_id) references Department(dept_id)
  );


  insert into Department
  values (1,'computer_engineerging',' ');


  insert into Department
  values (2,'marketing',' ');



  insert into course
  values (1,1,'systems',' ','zakarya',3 );

  insert into course
  values (1,2,'DSP',' ','ibrahim',3);

  insert into course
  values (1,3,'algorithms',' ','menyawy',3 );

  insert into course
  values (2,4,'marketing101',' ','walid',3 );

  insert into course
  values (2,5,'production',' ','yehia',3 );

  insert into course
  values (2,6,'distribution',' ','sherif',3 );
