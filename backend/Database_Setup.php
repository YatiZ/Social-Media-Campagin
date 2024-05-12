<?php
include('config.php');
//-----------------Drop table-----------------------------
$query="drop table register";
$run=mysqli_query($con,$query);

//---------------------Register------------------------------

$query="
CREATE TABLE `sms`.`register` (
  `sid` INT NOT NULL AUTO_INCREMENT,
  `sname` VARCHAR(45) NULL,
  `semail` VARCHAR(45) NULL,
  `saddress` VARCHAR(45) NULL,
  PRIMARY KEY (`sid`),
  UNIQUE INDEX `semail_UNIQUE` (`semail` ASC) VISIBLE);
  ";
$run=mysqli_query($con,$query);

if ($run)
{
echo "Create registration table successfully ";
}
else
{
echo mysqli_error($con);
}






