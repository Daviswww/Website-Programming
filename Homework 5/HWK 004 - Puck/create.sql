CREATE TABLE puck(
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	Name varchar(256) not null,
	Points int(100) not null,
);

INSERT INTO puck (Name, Points)
	VALUES ('Davis', 100);