--------------------------CREATE TABLE FOR CUSTOMER--------------------------
create table customer_IT17097420
(
	cus_Id varchar(20),
	phone int,
	[address] varchar(100),
	dob date,
	sur_Name varchar(50),
	f_Name varchar(30),
	email varchar(30),
	[password] varchar(30)

constraint pk_customer_IT17097420 primary key (cus_Id)
);

select *
from customer_IT17097420

--------------------------CREATE TABLE FOR RECEIPT--------------------------
create table receipt_IT17097420
(
	recei_Id varchar(30),
	conf_Date date,
	cost varchar(30),	
	cus_Id varchar(30)
	
	constraint pk_receipt_IT17097420 primary key(recei_Id)
);

select *
from receipt_IT17097420

--------------------------CREATE TABLE FOR PAYMENT--------------------------
create table payment_IT17097420
(
	pay_Id varchar(20),
	[type] varchar(30),
	ex_Date date,
	sec_Code int,
	card_Num varchar(30),
	recei_Id varchar(30)
	
	constraint pk_payment_IT17097420 primary key(pay_Id)
	constraint fk_receipt_IT17097420 foreign key(recei_Id) references receipt_IT17097420 (recei_Id)
);
select *
from payment_IT17097420

--------------------------CREATE TABLE FOR EVENT--------------------------

create table [event_IT17097420]
(
	event_Id varchar(20),
	[type] varchar(30) 

constraint pk_event_IT17097420 primary key(event_Id)
);

select *
from event_IT17097420

--------------------------CREATE TABLE FOR SUB EVENT--------------------------

create table sub_Event_IT17097420
(
	sube_Id varchar(20),
	name varchar(30),
	price varchar(30),
	event_Id varchar(20)
	
	constraint pk_sub_event_IT17097420 primary key(sube_Id),
	constraint fk_event_IT17097420 foreign key(event_Id) references [event_IT17097420]
	
);

select *
from sub_Event_IT17097420

--------------------------CREATE TABLE FOR CHOOSE--------------------------

create table choose_IT17097420
(
	cus_Id varchar(20),
	event_Id varchar(20),
	[date] date
	
	constraint pk_choose_IT17097420 primary key(cus_Id,event_Id),
	constraint fk_customer_IT17097420 foreign key(cus_Id) references customer_IT17097420,
	constraint fk_event2_IT17097420 foreign key(event_Id) references event_IT17097420
)

select *
from choose_IT17097420


--------------------------------INSERT DATA TO TABLES---------------------------



--------------------------INSERT DATA TO CUSTOMER TABLE-------------------------

INSERT INTO customer_IT17097420
VALUES('c001',0776740966,'No.32,dematagoda road,colombo 10.','1979/06/07','Aleem','Fasrin','fasrinaleem@gmail.com','fs07')
INSERT INTO customer_IT17097420
VALUES('c002',0710725941,'No.13/1,Gallroad,Panadura.','1949/06/07','Sahan','Vickramarathna','sahanhettiyaratchi@gmail.com','afdfdfa')
INSERT INTO customer_IT17097420
VALUES('c003',0776235210,'No.07,New Kandy road,Malabe. ','1989/05/07','Sriyani','Silva','sriyanisilva98@gmail.com','r48571')
INSERT INTO customer_IT17097420
VALUES('c004',0751248013,'No.335,Old road,Rathmalana.','1969/02/07','Nimal','Rajapaksha','rajapaksha69@gmail.com','fdf566')
INSERT INTO customer_IT17097420
VALUES('c005',0775509902,'No.52,Bans Place,Colombo 07.','1989/07/07','Amashi','Ranasinghe','amashiranasinghe@gmail.com','fasf56')
INSERT INTO customer_IT17097420
VALUES('c006',0714233310,'No.1,New road Ambalangoda.','1972/08/07','Senura','Fernando','senurafernando@gmail.com','f868')
INSERT INTO customer_IT17097420
VALUES('c007',0709862460,'No.56 New Moor Street,Colombo 11.','1990/09/07','Shantha','Senavirathna','senavirathna90@gmail.com','t2546')
INSERT INTO customer_IT17097420
VALUES('c008',0776895452,'No.962 jayah mawatha,colombo 08.','1967/04/07','Nethmini','Wickramasinghe','nethmini65@gmail.com','4546')
INSERT INTO customer_IT17097420
VALUES('c009',0729862456,'No.43 maithripala street,hambanthota.','1995/05/07','Kasun','Hettiyaratchi','kasa123@gmail.com','84132')
INSERT INTO customer_IT17097420
VALUES('c010',0752131460,'No.98 hettiyaratchi mawatha,badulla.','1998/01/07','Roshan','Mohamed','rush32@gmail.com','3628')

select *
from customer_IT17097420
 

--------------------------INSERT DATA TO RECEIPT TABLE----------------------------
INSERT INTO receipt_IT17097420 
VALUES('r001','2017/10/25','Rs.XXXXX','c001')
INSERT INTO receipt_IT17097420
VALUES('r004','2017/01/12','Rs.XXXXX','c004')
INSERT INTO receipt_IT17097420
VALUES('r007','2017/11/05','Rs.XXXXX','c006')
INSERT INTO receipt_IT17097420
VALUES('r006','2017/09/18','Rs.XXXXX','c007')
INSERT INTO receipt_IT17097420
VALUES('r008','2017/02/09','Rs.XXXXX','c009')


SELECT *
FROM receipt_IT17097420


--------------------------INSERT DATA TO PAYMENT TABLE---------------------------
INSERT INTO payment_IT17097420
VALUES('p4539','Credit card','2020/05/25',795,4530921178122345,'r001')
INSERT INTO payment_IT17097420
VALUES('p9572','Debit card','2025/09/14',425,9231463541713201,'r004')
INSERT INTO payment_IT17097420
VALUES('p3179','Credit card','2021/03/22',795,4555656654953045,'r007')
INSERT INTO payment_IT17097420
VALUES('p8821','Paybal','2024/09/04',733,0,'r006')
INSERT INTO payment_IT17097420
VALUES('p4531','Credit card','2020/05/25',795,4530921178122345,'r008')

select *
from payment_IT17097420


---------------------------INSERT DATA TO EVENT TABLE-----------------------------
INSERT INTO event_IT17097420
VALUES('e001','Coperative Parties')
INSERT INTO event_IT17097420
VALUES('e002','Conferences')
INSERT INTO event_IT17097420
VALUES('e003','Employee fun days')


select *
from event_IT17097420


--------------------------INSERT DATA TO SUB EVENT TABLE--------------------------
INSERT INTO sub_Event_IT17097420
VALUES('se001_1','Year End Parties','Rs.XXXXX','e001')
INSERT INTO sub_Event_IT17097420
VALUES('se001_2','Fairewell Parties','Rs.XXXXX','e001')
INSERT INTO sub_Event_IT17097420
VALUES('se001_3','Get together','Rs.XXXXX','e001')
INSERT INTO sub_Event_IT17097420
VALUES('se001_4','New Year','Rs.XXXXX','e001')
INSERT INTO sub_Event_IT17097420
VALUES('se002_1','Conferences','Rs.XXXXX','e002')
INSERT INTO sub_Event_IT17097420
VALUES('se003_1','Employee Trips','Rs.XXXXX','e003')
INSERT INTO sub_Event_IT17097420
VALUES('se003_2','Employee Day Outs','Rs.XXXXX','e003')

select *
from sub_Event_IT17097420


-------------------------INSERT DATA TO CHOOSE TABLE------------------------------
INSERT INTO choose_IT17097420
VALUES('c001','e001','2018/02/10')
INSERT INTO choose_IT17097420
VALUES('c004','e003','2018/02/15')
INSERT INTO choose_IT17097420
VALUES('c006','e002','2018/03/01')
INSERT INTO choose_IT17097420
VALUES('c007','e002','2018/03/07')
INSERT INTO choose_IT17097420
VALUES('c009','e001','2018/03/10')
 
SELECT *
FROM choose_IT17097420






drop table customer_IT17097420
drop table receipt_IT17097420
drop table payment_IT17097420
drop table event_IT17097420
drop table sub_event_IT17097420
drop table choose_IT17097420


select *
from customer_IT17097420

select *
from receipt_IT17097420

select *
from payment_IT17097420

select * 
from event_IT17097420

select *
from sub_Event_IT17097420

select *
from choose_IT17097420