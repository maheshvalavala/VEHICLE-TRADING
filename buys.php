<?php
        #sample connection to database with name test
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "vehicle_trade"; #can be any name 
        $conn = new mysqli($server, $username, $password, $dbname);
       
        if($conn->connect_error){
            die("Connection failed.".$conn->connect_error);
        }else{
            if(isset($_REQUEST['buy'])){
               if($_REQUEST['firstname']!=""&&$_REQUEST['email']!=""&&$_REQUEST['adr']!="" &&$_REQUEST['city']!=""&&$_REQUEST['ste']!="" &&$_REQUEST['Pincode']!=""&&$_REQUEST['cardname']!="" &&$_REQUEST['cardnumber']!="" &&$_REQUEST['expmonth']!="" &&$_REQUEST['expyear']!="" &&$_REQUEST['cvv']!="" ){
                    $input = $_REQUEST['firstname'];    
                    $input1 = $_REQUEST['email'];
                    $input2 = $_REQUEST['adr'];
                    $input3 = $_REQUEST['city'];
                    $input4 = $_REQUEST['ste'];
                    $input5 = $_REQUEST['Pincode'];
                    $input6 = $_REQUEST['cardname'];
                    $input7 = $_REQUEST['cardnumber'];
                    $input8 = $_REQUEST['expmonth'];
                    $input9 = $_REQUEST['expyear'];
                    $input10 = $_REQUEST['cvv'];
                  
                    echo '<script>alert("Data taken successfull")</script>';
                    echo '<script>windows: location="pres.php"</script>';
                    $sql = "INSERT INTO buy(firstname,email,adr,city,ste,Pincode,cardname,cardnumber,expmonth,expyear,cvv) VALUES('$input','$input1','$input2','$input3','$input4','$input5','$input6','$input7','$input8','$input9','$input10')";
                    if($conn->query($sql)===TRUE){
                        echo "\n\nThe value is taken into table";
                    }
                    else{
                      echo "\n error in executing";
                    }
                }else{
                    echo "\nThe value is not provided.";
                }

            }
        }
?>