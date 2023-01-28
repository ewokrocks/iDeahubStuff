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

CREATE TABLE if not exists `DeviceData`(
`DeviceDatald` int primary key,
`Comsumption_type` varchar(45) not null,
`Data` datetime not null,
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









