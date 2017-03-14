<?php
   include("config.php");
   
   session_start();
   $personName = $_POST['Cname'];
   $phone = $_POST['phone'];
   
   
   $sql1 = "select EngName from Contact where Contact.EngName = '$personName'";
  	$result1 = mysqli_query($db,$sql1);
  	$row = mysqli_fetch_row($result1);
    $countName = mysqli_num_rows($result1);
    $sql2 = "select phone from Contact where Contact.phone = '$phone'";
    $result2 = mysqli_query($db,$sql2);
	$row1 = mysqli_fetch_row($result2);
    $countPhone = mysqli_num_rows($result2);
    
    
 	if(empty($countName)|| empty($countPhone)){
   	echo "There is no such user."."<br>";
  	echo "Please input again."."<br>";
   	
   }
   else {$sql = "select EntryID , EngName ,ChiDanceSchoolName, EngDanceSchoolName , email, phone from DWC.Contact where DWC.Contact.EngName = '$personName' && DWC.Contact.phone = '$phone'";
        $raw_result = mysqli_query($db,$sql);
        if(mysqli_num_rows($raw_result)!=0){
        $results = mysqli_fetch_array($raw_result);
     echo "EntryID:".$results['EntryID']."<br>"."Contact person name:".$results['EngName']."<br>"."School Name:".$results['EngDanceSchoolName']."<br>"."Email:".$results['email']."<br>"."Tel:".$results['phone']."<br>";}
     else echo "There is no record matched."."<br>";}
     
echo  "<a href = \"search.html\">Search Again</a>"."<br>";
echo  "<a href = \"welcome.php\">Return to Home Page</a>"."<br>";
?>