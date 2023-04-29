<?php 
// ************validition empty string**********
if (empty ($_POST["name"])) {  
            echo '<script>
                        document.getElementById("error_name").innerHTML = "*your name is empty.";
                    </script>';
            

} else {  
    $name = $_POST["name"];  
}  
//************validition  string ********** */
$name = $_POST ["name"];
if (!preg_match ("/^[a-zA-z]*$/", $name) ) {    
        echo '<script>
                    document.getElementById("error_name").innerHTML = "*Only alphabets and whitespace are allowed.";
                </script>';
} else {  
    echo $name;  
} 
//*************validition numbers ****************** */
$mobileno = $_POST ["phone"];  
if (!preg_match ("/^[0-9]*$/", $mobileno) ){  
    // $ErrMsg = "Only Numeric value is allowed.";  
    // echo $ErrMsg;
    echo '<script>
                document.getElementById("error_phone").innerHTML = "*Only Numeric value is allowed.";
            </script>';
} else if( $length != 11){  
      
//*************validition length ****************** */

$mobileno = strlen ($_POST ["phone"]);  
$length = strlen ($mobileno);    
    echo '<script>
                document.getElementById("error_phone").innerHTML = "*Mobile must have 11 digits.";
            </script>';
} else {  
    echo "Your Mobile number is: " .$mobileno;  
}  