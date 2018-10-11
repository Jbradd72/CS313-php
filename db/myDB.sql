
CREATE DATABASE scrapbook

CREATE TABLE scrapbook.accounts(
	accountID int SERIAL NOT NULL PRIMARY,
	username varchar(32) NOT NULL UNIQUE,
	password varchar(64) NOT NULL,
	name   varchar(64)   NOT NULL,
	joinDate date,
);

CREATE TABLE scrapbook.photo(
	photoID int SERIAL NOT NULL PRIMARY,
	accountID int REFERENCES scrapbook.accounts(accountID),
	fileName varchar(255) NOT NULL,
	size int NOT NULL
);

CREATE TABLE scrapbook.video(
	videoID int SERIAL NOT NULL PRIMARY,
	accountID int REFERENCES scrapbook.accounts(accountID),
	fileName varchar(255) NOT NULL,
	size int NOT NULL
);

CREATE TABLE scrapbook.document(
	docID int SERIAL NOT NULL PRIMARY,
	accountID int REFERENCES scrapbook.accounts(accountID),
	fileName varchar(255) NOT NULL,
	size int NOT NULL
);