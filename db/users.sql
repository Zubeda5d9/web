


--  create a user table
create table users(userName varchar(100),userPassword varchar(100),Permission varchar(100));


-- insert the data into the table
INSERT INTO `users` (`userName`, `userPassword`, `Permission`) VALUES
('userName','userPassword','readonly'),('userName','userPassword','write');







