create database if not exists ProblemComplaintSystem default character set utf8mb4 collate utf8mb4_unicode_ci;

use ProblemComplaintSystem;

create table if not exists Person (
    Person_ID int(10) not null primary key,
    Person_fname varchar(50) not null,
    Person_lname varchar(50) not null,
    Person_phonenumber varchar(10) not null,
    Person_email varchar(50) not null,
    Person_username varchar(50) not null,
    Person_password varchar(50) not null,
    Person_status int(1) not null comment '1: member, 2: employee, 3: admin'
    Person_rights boolean not null comment '1: usable, 2: unusable'
);

create table if not exists Problem (
    Problem_ID int(10) not null primary key,
    Problem_date date not null,
    Problem_time time not null,
    Problem_title varchar(100) not null,
    Problem_detail text(200) not null,
    Problem_picture varchar(100),
    Member_ID int(10) not null,
    Employee_ID int(10) not null,
    Admin_ID int(10) not null,
    operational_ID int(10),
    Problem_status int(1) not null comment '1: complaint, 2: operational'
);