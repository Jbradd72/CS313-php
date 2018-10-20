
CREATE DATABASE scrapbook;

\c scrapbook

CREATE TABLE accounts(
	accountID SERIAL PRIMARY KEY,
	username varchar(32) NOT NULL UNIQUE,
	password varchar(64) NOT NULL,
	name   varchar(64)   NOT NULL,
	joinDate date
);

CREATE TABLE photo(
	photoID SERIAL PRIMARY KEY,
	accountID int REFERENCES accounts(accountID),
	fileName varchar(255) NOT NULL,
	size int NOT NULL
);

CREATE TABLE video(
	videoID SERIAL PRIMARY KEY,
	accountID int REFERENCES accounts(accountID),
	fileName varchar(255) NOT NULL,
	size int NOT NULL
);

CREATE TABLE document(
	docID SERIAL PRIMARY KEY,
	accountID int REFERENCES accounts(accountID),
	fileName varchar(255) NOT NULL,
	size int NOT NULL
);