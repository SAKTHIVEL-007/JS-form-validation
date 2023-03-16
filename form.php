<?php 
 $conn= new mysqli('localhost','root','','register');
 $sname= $_POST['sname']; 
 $fname= $_POST['fname']; 
 $saddress= $_POST['saddress']; 
 $gender= $_POST['gender']; 
 $dob=$_POST['dob'];
 $email= $_POST['email']; 
 $mobile= $_POST['mobile']; 
 $job= $_POST['job']; 

 $sql = "INSERT INTO form(sname,fname,saddress,gender,dob,email,mobile,job) VALUES('$sname','$fname','$saddress','$gender','$dob','$email','$mobile','$job')";
 $query= mysqli_query($conn,$sql);
 if($query){
    echo "<center> <p> YOU HAVE BEEN LOGGED IN SUCESSFULLY</p></center>";
    echo "<center> <button><a href='form.html'>GO TO HOME</a></button></center>";
 }    
 ?>