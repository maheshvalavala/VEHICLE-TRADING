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
            if(isset($_REQUEST['sell'])){
               if($_REQUEST['FullName']!=""&&$_REQUEST['Phoneno']!=""&&$_REQUEST['Selecttype']!=Null &&$_REQUEST['Brand']!=""&&$_REQUEST['VehicleName']!="" &&$_REQUEST['Vehiclecolor']!=""&&$_REQUEST['VehicleMilage']!="" &&$_REQUEST['VehiclePrice']!=""){
                    $input = $_REQUEST['FullName'];    
                    $input1 = $_REQUEST['Phoneno'];
                    $input2 = $_REQUEST['Selecttype'];
                    $input3 = $_REQUEST['Brand'];
                    $input4 = $_REQUEST['VehicleName'];
                    $input5 = $_REQUEST['Vehiclecolor'];
                    $input6 = $_REQUEST['VehicleMilage'];
                    $input7 = $_REQUEST['VehiclePrice'];
                    echo '<script>alert("Data taken successfull")</script>';
                    echo '<script>windows: location="buy.php"</script>';
                    $sql = "INSERT INTO sell(FullName,Phoneno,Selecttype,Brand,VehicleName,Vehiclecolor,VehicleMilage,VehiclePrice) VALUES('$input','$input1','$input2','$input3','$input4','$input5','$input6','$input7')";
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