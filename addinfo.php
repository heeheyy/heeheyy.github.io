<?php
   include("config.php");
   
   session_start();
   $country = $_POST['country'];
   $other = $_POST['other'];
   $asian = $_POST['asian'];
   $nameEng = $_POST['NameEng'];
   $nameChi = $_POST['NameChi'];
   $schoolEng = $_POST['SchoolNameEng'];
   $schoolChi = $_POST['SchoolNameChi'];
   $principalEng = $_POST['PrincipalEng'];
   $principalChi = $_POST['PrincipalChi'];
   $addressEng = $_POST['AddressEng'];
   $addressChi = $_POST['AddressChi'];
   $email = $_POST['email'];
   $phone =$_POST['phone'];
   
   if($country == "Null"){
   		$country = $other;}
   		else $other = null;
   		
   $sql = "insert into Contact values('','$country','$asian','$nameEng','$nameChi','$schoolEng','$schoolChi','$principalEng','$principalChi','$addressEng','$addressChi','$email','$phone')";
   $raw_result = mysqli_query($db,$sql);
   		echo "Entry added."."<br>";
   
         /*echo $country."<br>";
         echo $other."<br>";
         echo $asian."<br>";
         echo $nameEng."<br>";
		 echo $nameChi."<br>";
		 echo $schoolEng."<br>";
		 echo $schoolChi."<br>";
		 echo $principalEng."<br>";
		 echo $principalChi."<br>";
		 echo $addressEng."<br>";
		 echo $addressChi."<br>";
		 echo $email."<br>";
		 echo $phone."<br>";*/
         echo "<a href = \"addinfo.html\">Add another contact entry</a>"."<br>";
         echo "<a href = \"AddDanceinfo.html\">Add dance information</a>"."<br>";
         echo "<a href = \"welcome.php\">Return to Home Page</a>"."<br>";
?>