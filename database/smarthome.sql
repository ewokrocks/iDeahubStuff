CREATE DATABASE if not exists `smarthome`;
use smarthome;

CREATE TABLE `User`(
`UserID` INT primary KEY,
`FirstName` varchar(45) NOT NULL,
`LastName` varchar(45) not null,
`password` varchar(45) not null,
`Email` varchar(45) not null
);

CREATE TABLE `Device`(
`DeviceID` INT NOT NULL primary KEY,
`DeviceName` varchar(45) not null,
`DeviceStatus` tinyint,
`UserID` INT references User(UserID)
);

CREATE TABLE `Group`(
`GroupID` INT primary key,
`GroupName` varchar(45) not null,
`UserID` int references User(UserID),
`DeviceID` int references Device(DeviceID)
);

CREATE TABLE `DeviceData`(
`DeviceDatald` int primary key,
`Comsumption_type` varchar(45) not null,
`Data` datetime not null,
`Consumption_amount` float not null,
`Device_ID` int references Device(DeviceID)
);

CREATE TABLE `DeviceVersion`(
`idDeviceVersion` int primary key,
`Title` varchar(45),
`Value` int,
`DeviceID` int references Device(DeviceID)
);

CREATE TABLE `message`(
    `id` int auto_increasing,
    `name` varchar(128),
    `surname` varchar(128),
    `email` varchar(128),
    `type` varchar(64),
    `message` varchar(128)
;
)





