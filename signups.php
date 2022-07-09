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
            if(isset($_REQUEST['submit'])){
               if($_REQUEST['Username']!=""&&$_REQUEST['Firstname']!=""&&$_REQUEST['Lastname']!=""&&$_REQUEST['email']!=""&&$_REQUEST['phone']!=NULL &&$_REQUEST['psw']!=NULL&&$_REQUEST['cpsw']!=""){
                    $input = $_REQUEST['Username'];    
                    $input1 = $_REQUEST['Firstname'];
                    $input2 = $_REQUEST['Lastname'];
                    $input3 = $_REQUEST['email'];
                    $input4 = $_REQUEST['phone'];
                    $input5 = $_REQUEST['psw'];
                    $input6 = $_REQUEST['cpsw'];
                    echo '<script>alert("Data taken successfull")</script>';
                    echo '<script>windows: location="index.php"</script>';
                    $sql = "INSERT INTO signup(Username,Firstname,Lastname,email,phone,psw,cpsw) VALUES('$input','$input1','$input2','$input3','$input4','$input5','$input6')";
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