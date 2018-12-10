      <?php
         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "1234";
		 $dbname="data";
         $conn =new mysqli($dbhost,$dbuser,$dbpass,$dbname);
   
         if($conn->connect_error ){
            die("Could not connect:" . $conn->connect_error);
         }
         $Username=$_POST['user'];
		 $password=$_POST['pass'];
		 $sql="INSERT INTO saffron(Username,password)VALUES('$Username','$password')";
		 
		 if($conn->query($sql)=== TRUE){
		 //echo "New record created successfully";
		 header('location:profile.html');

		 }
			 else
			 {
				 echo "Error:" .$sql. "<br>". $conn->error;
			 }
		 
		 
         $conn->close();
      ?>
