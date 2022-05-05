
<?php
    if(isset($_POST['submit']))
    
    {  $txtName = $_POST['txtName'];
$txtSurname = $_POST['txtSurname'];
$txtRace = $_POST['txtRace'];
$txtGender = $_POST['txtGender'];
$txtSurbub= $_POST['txtSurbub'];
$txtOccupation = $_POST['txtOccupation'];
$intAge = $_POST['intAge'];
        
        $host = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "western cape covid bookings";

        
        $con = mysqli_connect($host, $username, $password, $dbname);
        echo "Connected successfully";

        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
      
        $sql = "INSERT INTO `tbl_coviddata` (`Id`, `fldName`, `fldSurname`, `fldRace`, `fldGender`,`fldOccupation`,`fldAge,) VALUES ('0', '$txtName', '$txtSurname', '$txtRace', '$txtGender', '$txtSurbub','$textOccupation','$txtAge',)";
      
      
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
 
           mysqli_close($con);}

           ?>



           <?php
            
             if(isset($_POST['submit']))
       
            { $txtName = $_POST['txtName'];
             $txtEmail = $_POST['txtEmail'];
             $intPhone = $_POST['intPhone'];
             $intStreetNo = $_POST['intStreetNo'];
             $txtStreet = $_POST['txtStreet'];
             $txtGender = $_POST['txtGender'];
             $txtAge = $_POST['txtAge'];
          
               $host = "localhost";
               $username = "root";
               $password = "mysql";
               $dbname = "western cape covid bookings";
              
               $con = mysqli_connect($host, $username, $password, $dbname);
      
               echo "Connected successfully";
            
               if (!$con)
               {
                   die("Connection failed!" . mysqli_connect_error());
               }
               $sql = "INSERT INTO `tbl_covidtest` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldStreetNo`,`fldStreet`, `fldGender`, `fldAge,) VALUES ('0', '$txtName', '$txtEmail', '$intPhone', '$intStreetNo','$txtStreet', '$txtGender', '$txtAge',)";
        
               $rs = mysqli_query($con, $sql);
               if($rs)
               {
                   echo "Successfully saved";
               }
          
               mysqli_close($con);}
           
       ?>


  <?php
          
              
          if(isset($_POST['submit']))
    
        {$txtName = $_POST['txtName'];
          $txtEmail = $_POST['txtEmail'];
          $intPhone = $_POST['intPhone'];
          $intStreetNo = $_POST['intStreetNo'];
          $txtStreet = $_POST['txtStreet'];
          $txtGender = $_POST['txtGender'];
          $txtAge = $_POST['txtAge'];
          
            $host = "localhost";
            $username = "root";
            $password = "mysql";
            $dbname = "western cape covid bookings";
    
            $con = mysqli_connect($host, $username, $password, $dbname);
   
            echo "Connected successfully";

            if (!$con)
            {
                die("Connection failed!" . mysqli_connect_error());
            }
            $sql = "INSERT INTO `tbl_covidvaccine` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldStreetNo`,`fldStreet`, `fldGender`, `fldAge,) VALUES ('0', '$txtName', '$txtEmail', '$intPhone', '$intStreetNo','$txtStreet', '$txtGender', '$txtAge',)";
        
            $rs = mysqli_query($con, $sql);
            if($rs)
            {
                echo "Successfully saved";
            }
        
            mysqli_close($con);
          }
    ?>