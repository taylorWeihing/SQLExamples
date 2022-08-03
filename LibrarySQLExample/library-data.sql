USE library;

INSERT INTO book VALUES 
  ('Fundamentals of Computer Science','null','1999','123456789ABCDE');
INSERT INTO book VALUES 
 ('Harry Plopper','null','2013','263454789FBHDE');
INSERT INTO book VALUES 
  ('Calculus for Dummies','fifth','2018','555333777AAAER');
INSERT INTO book VALUES
  ('Fake Book','Second','2012','987654321BBCCD');
INSERT INTO book VALUES
 ('Fundamentals of Computer Science','Second','2003','123456789ABCDF');
INSERT INTO book VALUES
 ('Star Wars: An Out of this World Review','null','1980','99999999999999');

INSERT INTO borrower VALUES 
 ('John','Smith','731 Fondren, Houston, TX','12345678901234')
INSERT INTO borrower VALUES  
 ('Alicia','Zelaya','3321 Castle, Spring, TX','13131215161514');
INSERT INTO borrower VALUES 
 ('Arnold','Head','233 Spring St, Dallas, TX','16161514158416');
INSERT INTO borrower VALUES 
 ('Jill','Jarvis','6234 Lincoln, Chicago, IL','59495656151215');
INSERT INTO borrower VALUES   
 ('Sam','Snedden','987 Windy St, Milwaukee, WI','19583659815683');
INSERT INTO borrower VALUES 
 ('Gerald','Small','122 Ball Street, Dallas, TX','16853468215685');

INSERT INTO copy VALUES (1,'yes',null,null,14,3,'123456789ABCDE');
INSERT INTO copy VALUES (2,'no','2020-03-14',null,14,4,'123456789ABCDE');
INSERT INTO copy VALUES (1,'yes','2020-02-14','2020-02-28',14,3,'263454789FBHDE');
INSERT INTO copy VALUES (2,'yes',null,null,14,5,'263454789FBHDE');
INSERT INTO copy VALUES (1,'no','2020-04-18',null,14,6,'555333777AAAER');
INSERT INTO copy VALUES (2,'yes',null,null,14,5,'555333777AAAER');
INSERT INTO copy VALUES (1,'yes',null,null,14,3,'987654321BBCCD');
INSERT INTO copy VALUES (2,'no','2020-05-13',null,14,4,'987654321BBCCD');
INSERT INTO copy VALUES (1,'yes',null,null,14,0,'123456789ABCDF');
INSERT INTO copy VALUES (1,'no','2020-05-01',null,14,2,'16853468215685');
INSERT INTO copy VALUES (2,'yes',null,null,14,1,'16853468215685');


