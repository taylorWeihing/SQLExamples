DROP DATABASE IF EXISTS library;
CREATE DATABASE library;
USE library;


DROP TABLE IF EXISTS book CASCADE;
CREATE TABLE book (
  title			varchar(40) not null,
  edition		varchar(10), -- 'first or second...'
  year			char(4),
  ISBN			char(13) not null,
  primary key 	(ISBN)
 );

DROP TABLE IF EXISTS borrower CASCADE;
CREATE TABLE borrower (
  fname			varchar(40) not null,
  lname			varchar(40) not null,
  address		varchar(60),
  b_number		char(14),  -- 'borrow's number that is 14 digits long'
  borrower_ISBN	char(13)
  primary key 	(b_number),
  foreign key 	(borrow_ISBN) references book(ISBN)
);

DROP TABLE IF EXISTS copy CASCADE;
CREATE TABLE copy (
  cnumber   	decimal(1), -- ' number indicating the copy number'
  available 	varchar(3), -- 'yes or no'
  loaned_out 	date,
  returned		date,
  loan_period 	decimal(10), -- 'amount of days the book can be loaned out'
  num_of_loans	decimal(10), -- 'number of times the book has been loaned out'
  copy_ISBN		char(13),
  primary key 	(cnumber),
  foreign key 	(copy_ISBN) references book(ISBN)
);
