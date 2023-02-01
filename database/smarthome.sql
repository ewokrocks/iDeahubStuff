CREATE DATABASE if not exists `smarthome`;
use smarthome;

CREATE TABLE if not exists `User`(
`UserID` INT primary KEY,
`FirstName` varchar(45) NOT NULL,
`LastName` varchar(45) not null,
`password` varchar(45) not null,
`Email` varchar(45) not null
);

CREATE TABLE if not exists `Device`(
`DeviceID` INT NOT NULL primary KEY,
`DeviceName` varchar(45) not null,
`DeviceStatus` tinyint,
`UserID` INT references User(UserID)
);

CREATE TABLE if not exists `Group`(
`GroupID` INT primary key,
`GroupName` varchar(45) not null,
`UserID` int references User(UserID),
`DeviceID` int references Device(DeviceID)
);

drop table if exists `DeviceData`;
CREATE TABLE if not exists `DeviceData`(
`DeviceDatald` int primary key,
`Comsumption_type` varchar(45) not null,
`Day` datetime not null,
`Consumption_amount` float not null,
`Device_ID` int references Device(DeviceID)
);

CREATE TABLE if not exists `DeviceVersion`(
`idDeviceVersion` int primary key,
`Title` varchar(45),
`Value` int,
`DeviceID` int references Device(DeviceID)
);

CREATE TABLE if not exists `message`(
    `id` int primary key auto_increment,
    `name` varchar(128),
    `surname` varchar(128),
    `email` varchar(128),
    `type` varchar(64),
    `message` varchar(128)
);

alter table `Group` add column if not exists `image` varchar(128);

alter table `User` change UserID UserID INT auto_increment not null;

alter table `Device` change DeviceID DeviceID int auto_increment not null;

alter table `Group` change GroupID GroupID int auto_increment not null;

alter table `DeviceData` change DeviceDatald DeviceDatald int auto_increment not null;

alter table `DeviceVersion` change idDeviceVersion idDeviceVersion int auto_increment not null;

alter table `DeviceData` change if exists Device_ID DeviceID int not null;


insert into devicedata(Comsumption_type,Day,Consumption_amount) value ('water','2022-12-1','15');
insert into devicedata(Comsumption_type,Day,Consumption_amount) value ('water',2022-12-2,'30');
insert into devicedata(Comsumption_type,Day,Consumption_amount) value ('water','2022-12-3','40');
insert into devicedata(Comsumption_type,Day,Consumption_amount) value ('water','2022-12-4','55');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-5','60');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-6','79');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-7','86');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-8','90');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-9','100');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-10','187');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-11','200');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-12','230');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-13','243');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('water','2022-12-14','267');

-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-1','15');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-2','20');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-3','25');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-4','33');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-5','37');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-6','45');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-7','48');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-8','57');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-9','63');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-10','75');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-11','87');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-12','96');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-13','104');
-- insert into devicedata(Comsumption_type,Data,Consumption_amount) value ('electronic','2022-12-14','135');





INSERT INTO device (DeviceId, DeviceName, DeviceStatus,UserID)
VALUES ('1','Washing Machine','0','15');





