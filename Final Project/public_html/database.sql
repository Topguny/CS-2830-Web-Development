/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  lukas
 * Created: Dec 9, 2016
 */
CREATE TABLE `login` (
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`loginid`)
);

insert into login (username,password) value ('test',md5('pass'));

