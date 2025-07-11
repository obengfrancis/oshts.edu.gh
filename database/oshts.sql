
CREATE DATABASE oshts;

CREATE TABLE admin
(
Admin_ID Int (11) Not Null Auto_Increment Primary Key,
Name Varchar (100) Not Null,
Department Varchar (100) Not Null,
Contact Varchar (100) Not Null,
Username Varchar (100) Not Null,
Password Varchar (100) Not Null);

CREATE TABLE application
(
applicationID Int (11) Not Null Auto_Increment Primary Key,
First_Name Varchar (100) Not Null,
Other_Name Varchar (100) Not Null,
Last_Name Varchar (100) Not Null,
Date_of_Birth Varchar (100) Not Null,
Gender Varchar (100) Not Null,
Religion Varchar (100) Not Null,
School Varchar (100) Not Null,
Address Varchar (100) Not Null,
Index_Number Varchar (100) Not Null Unique,
Score Varchar (100) Not Null,
Health_Condition Varchar (100) Not Null,
Specific_Condition Varchar (100) Not Null,
Course Varchar (100) Not Null,
Email Varchar (100) Not Null,
Father_Name Varchar (100) Not Null,
Mother_Name Varchar (100) Not Null,
Phone Varchar (100) Not Null);


CREATE TABLE exeat
(
Exeat_ID Int (11) Not Null  Auto_Increment Primary Key,
Full_Name Varchar (100) Not Null,
Date_of_Exeat Varchar (100) Not Null,
Time_of_Exeat Varchar (100) Not Null,
Reason  Varchar (100) Not Null,
Return_Date Varchar (100) Not Null,
Return_Time Varchar (100) Not Null,
Phone Varchar (100) Not Null,
Gender Varchar (100) Not Null);



CREATE TABLE user
(
UserID Int (11) Not Null Auto_Increment Primary Key,
Name Varchar (100) Not Null,
Department Varchar (100) Not Null,
Contact Varchar (100) Not Null,
Username Varchar (100) Not Null,
Password Varchar (100) Not Null);




CREATE TABLE user1
(
UserID Int (11) Not Null Auto_Increment Primary Key,
Name Varchar (100) Not Null,
Department Varchar (100) Not Null,
Contact Varchar (100) Not Null,
Username Varchar (100) Not Null,
Password Varchar (100) Not Null);










