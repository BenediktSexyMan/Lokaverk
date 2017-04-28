CREATE DATABASE 1311992289_hatidSpjall;
USE 1311992289_hatidSpjall;

CREATE TABLE post
(
	ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    titill VARCHAR(150) NOT NULL,
    efni VARCHAR(10000) NOT NULL,
    nafn VARCHAR(50)
);

CREATE TABLE com
(
	orPost INT NOT NULL,
    Efni VARCHAR(1000) NOT NULL,
    nafn VARCHAR(50),
    FOREIGN KEY (orPost) REFERENCES post(ID)
);

INSERT INTO post(titill, efni, nafn)
VALUES
	("Where are my heluleis?!?!", "Can someone please help me! I've lost my heluleis!!!!!!!!<br>Lol", "Anon"),
	("Happy birthday luv", "Happy birtday, wait wrong forum", "nona");

INSERT INTO com(orPost, efni, nafn)
VALUES
	(1, "What the fuck are heluleis?", "Dark Flight"),
	(1, "The good stuff... the good stuff", "Anon"),
	(1, "Lol nice", "420blaze"),
	(2, "Lol nice", "420blaze");

SELECT post.titill, com.efni
FROM post
	JOIN com
		ON post.ID = com.orPost
ORDER BY post.ID;