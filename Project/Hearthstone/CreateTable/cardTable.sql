/*!40101 SET NAMES utf8 */;
CREATE TABLE cards (
	card_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
	card_uid varchar(256) not null,
    card_name varchar(256) not null,
    card_career varchar(256) not null,
    card_effect varchar(256),
    card_race varchar(256),
    card_point int(11) not null,
    card_defense int(11) not null,
    card_attack int(11) not null
);

INSERT INTO cards (card_uid, card_name, card_career, card_effect, card_race, card_point, card_defense, card_attack)
	VALUES ('1', 'Old Murk-Eye', 'Neutral', 'Charge. Has +1 Attack for each other Murloc on the battlefield.', 'Fish man', 4, 4, 2)

INSERT INTO cards (card_uid, card_name, card_career, card_effect, card_race, card_point, card_defense, card_attack)
    VALUES ('2', 'Murloc Warleader', 'Neutral', 'Your other Murlocs have +2 Attack.', 'Fish man', 3, 3, 3)