
CREATE TABLE signupmembers(id INTEGER AUTO_INCREMENT NOT NULL,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
mobile_no VARCHAR(13) NOT NULL,
email VARCHAR(40) NOT NULL,
username VARCHAR(20) NOT NULL,
password VARCHAR(42) NOT NULL,
gender enum('male', 'female') NOT NULL,
dob DATE NOT NULL,
address VARCHAR(40) NOT NULL,
membershipplan VARCHAR(20) NOT NULL,

PRIMARY KEY (id, email, username)
);






CREATE TABLE class_schedule(id INTEGER AUTO_INCREMENT,
time VARCHAR(15) NOT NULL,
day INT NOT NULL,
class INT NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (day) REFERENCES class_day(id),
FOREIGN KEY (class) REFERENCES classes(id)
);



INSERT INTO class_schedule(time, day, class)
VALUES('06.00 - 07.00', 1, 1),
('07.00 - 08.00', 1, 3),
('08.00 - 09.00', 1, 12),
('09.00 - 10.00', 1, 13),
('10.00 - 11.00', 1, 7),
('11.00 - 12.00', 1, 10),
('12.00 - 13.00', 1, 12),

('06.00 - 07.00', 2, 2),
('07.00 - 08.00', 2, 4),
('08.00 - 09.00', 2, 12),
('09.00 - 10.00', 2, 13),
('10.00 - 11.00', 2, 8),
('11.00 - 12.00', 2, 12),
('12.00 - 13.00', 2, 12),

('06.00 - 07.00', 3, 12),
('07.00 - 08.00', 3, 3),
('08.00 - 09.00', 3, 5),
('09.00 - 10.00', 3, 13),
('10.00 - 11.00', 3, 7),
('11.00 - 12.00', 3, 10),
('12.00 - 13.00', 3, 12),

('06.00 - 07.00', 4, 2),
('07.00 - 08.00', 4, 4),
('08.00 - 09.00', 4, 12),
('09.00 - 10.00', 4, 13),
('10.00 - 11.00', 4, 9),
('11.00 - 12.00', 4, 11),
('12.00 - 13.00', 4, 12),

('06.00 - 07.00', 5, 12),
('07.00 - 08.00', 5, 3),
('08.00 - 09.00', 5, 13),
('09.00 - 10.00', 5, 6),
('10.00 - 11.00', 5, 13),
('11.00 - 12.00', 5, 10),
('12.00 - 13.00', 5, 12),

('06.00 - 07.00', 6, 12),
('07.00 - 08.00', 6, 12),
('08.00 - 09.00', 6, 12),
('09.00 - 10.00', 6, 12),
('10.00 - 11.00', 6, 7),
('11.00 - 12.00', 6, 10),
('12.00 - 13.00', 6, 13),

('06.00 - 07.00', 7, 12),
('07.00 - 08.00', 7, 12),
('08.00 - 09.00', 7, 12),
('09.00 - 10.00', 7, 12),
('10.00 - 11.00', 7, 13),
('11.00 - 12.00', 7, 7),
('12.00 - 13.00', 7, 12);



CREATE TABLE `classes` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `classname` varchar(20) NOT NULL,
 PRIMARY KEY (`id`)
);

INSERT INTO classes(classname) 
VALUES('Yoga'), ('Weightlifting'), ('Spinning Express'), ('Strength & Condition'), 
('Zumba'), ('Bootcamp'), ('RIP'), ('Power Abs'), ('Bums& Tums'), ('Aqua Fit'), 
('Pilates'), ('-'), ('Spinning');


CREATE TABLE `class_day` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `day` varchar(10) NOT NULL,
 PRIMARY KEY (`id`)
);

INSERT INTO class_day(day) 
VALUES('Sunday'), ('Monday'), ('Tuesday'), ('Wednesday'), 
('Thursday'), ('Friday'), ('Saturday'), ('Sunday');



CREATE TABLE `feedback` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(40) NOT NULL,
 `contact_no` varchar(12) NOT NULL,
 `email` varchar(40) NOT NULL,
 `message` varchar(1000) NOT NULL,
 PRIMARY KEY (`id`)
);




CREATE TABLE class_booking(id INTEGER AUTO_INCREMENT,
                           member INT NOT NULL,
                           class INT NOT NULL,
                           PRIMARY KEY (id, member, class),
                           FOREIGN KEY (member) REFERENCES signupmembers(id),
                           FOREIGN KEY (class) REFERENCES class_schedule(id)
);


CREATE TABLE admin_login(id INTEGER AUTO_INCREMENT,
                         name VARCHAR(40) NOT NULL,
                         username VARCHAR(20) NOT NULL,
                         password VARCHAR(72) NOT NULL,
                         PRIMARY KEY(id)
);

INSERT INTO admin_login(name, username, password) 
VALUES('Admin', 'admin', md5('password'));


CREATE TABLE page_information(id INTEGER AUTO_INCREMENT,
	header VARCHAR(20) NOT NULL,
	PRIMARY KEY (id)
);

INSERT INTO page_information(header) VALUES ('Legacy Fitness Club');





CREATE TABLE gallery(id INTEGER AUTO_INCREMENT,
	imagepath VARCHAR(100),
	PRIMARY KEY (id)
);

INSERT INTO gallery(imagepath)
VALUES('Image/locker.jpg'),
('Image/locker1.jpg'),
('Image/pool.jpg'),
('Image/steamroom.jpg'),
('Image/pool1.jpg'),
('Image/hottub.jpg'),
('Image/sauna.jpg'),
('Image/weight.jpe'),
('Image/studio.jpe'),
('Image/studio1.jpe'),
('Image/squat.jpe'),
('Image/benchpress.jpe');








