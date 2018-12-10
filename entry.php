      <?php
         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "1234";
		 $dbname="data";
         $conn =new mysqli($dbhost,$dbuser,$dbpass,$dbname);
   
         if($conn->connect_error ){
            die("Could not connect:" . $conn->connect_error);
         }
         // Fetching variables of the form which travels in URL
$Username = $_POST['user'];
$Email = $_POST['email'];
$Parentname=$_POST['text'];
$Gender = $_POST['name'];
$DOJ=$_POST['Text'];
$Time=$_POST['Time'];
$Phonenumber=$_POST['contact'];
$Address=$_POST['name'];
$Zipcode=$_POST['name'];
$YearofGraduation=$_POST['year'];
$Comments=$_POST['message'];

$sql="INSERT INTO entry(Username,email,Parentname,Gender,DOJ,Time,Phonenumber,Address,Zipcode,YearofGraduation,Comments) values ('$Username','$Email','$Parentname','$Gender','$DOJ','$Time','$Phonenumber','$Address','$Zipcode',$YearofGraduation,'$Comments')";
		 
		 if($conn->query($sql)=== TRUE){
		 echo "New record created successfully";
		 echo '<br><a href="index.html">Click here to login</a><br>';
		 

		 }
			 else
			 {
				 echo "Error:" .$sql. "<br>". $conn->error;
			 }
		 
		 
         $conn->close();
      ?>












