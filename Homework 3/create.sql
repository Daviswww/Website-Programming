CREATE TABLE form(
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	gender varchar(256) not null,
	age	int(100) not null,
	occupation varchar(256) not null,
	income int(100) not null,
	drink int(100) not null,
	bread int(100) not null,
	seafood int(100) not null,
	fruit int(100) not null,
	music int(100) not null,
	ball int(100) not null,
	clothes int(100) not null,
	car int(100) not null,
	shoes int(100) not null,
	colour int(100) not null
);
INSERT INTO form (gender, age, occupation, income, drink, bread, seafood, fruit, music, ball, clothes, car, shoes, colour)
	VALUES ('Female', 20, 'Student', 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);