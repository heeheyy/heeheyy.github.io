<?php
   include("config.php");
   
   session_start();
   $entryID = $_POST['entryID'];
   $name = $_POST['name'];
   $code = $_POST['code'];
   $title = $_POST['title'];
   $length = $_POST['length'];
   $choreographer = $_POST['choreographer'];
   $composer = $_POST['composer'];
   
   $sql1 = "select EntryID from Contact where Contact.entryID = '$entryID'";
  	$result1 = mysqli_query($db,$sql1);
  	$row = mysqli_fetch_row($result1);
    $count = mysqli_num_rows($result1);
   if(empty($count)){
   echo "There is no such user."."<br>";
   echo "Please input again."."<br>";
   echo  "<a href = \"AddDanceInfo.html\">Return to Home Page</a>"."<br>";
   }
    $sql = "insert into DanceInfo values('$entryID','$name','$code','$title','$length','$choreographer','$composer')";
    $result = mysqli_query($db,$sql);
   
    echo "Information added."."<br>";
         /*echo $entryID."<br>";
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
         echo "<a href = \"AddDanceinfo.html\">Add another dance information</a>"."<br>";
         echo "<a href = \"welcome.php\">Return to Home Page</a>"."<br>";
?>