<?php
               session_start();
               
               $servername="localhost";
               $username="root";
               $password="";
               $dbname="villa";

               $conn= new mysqli($servername,$username,$password, $dbname);

               if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
               } 
               echo "";

               $lgnic= $_POST["nic"];
               $lgphone= $_POST["phone"];



               $sql = "SELECT status , nic , phone  FROM rooms where nic ='".$lgnic."' && phone='".$lgphone."'";
               $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {
                     $_SESSION['nic'] = $row['nic'];
                     $_SESSION['phone'] =  $lgphone;
                     $id = $row['status'];
                     
                     if($id=='z')
                     {
                        header("Location: http://localhost/villa/my.php", true, 301);
                     }
                   
                  }
               } else {
                  echo "<font color='red'> Ooops ! No records found ! </font>";
                  echo "<a href='index.php' >Return to home </a>";
               }
               $conn->close();
            ?>