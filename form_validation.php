<?php 
// ************validition empty string**********
if (empty ($_POST["name"])) {  
    $errMsg = "Error! You didn't enter the Name.";  
             echo $errMsg;  
} else {  
    $name = $_POST["name"];  
}  
//************validition  string ********** */
$name = $_POST ["Name"];  
if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo $ErrMsg;  
} else {  
    echo $name;  
} 
//*************validition numbers ****************** */
$mobileno = $_POST ["Mobile_no"];  
if (!preg_match ("/^[0-9]*$/", $mobileno) ){  
    $ErrMsg = "Only numeric value is allowed.";  
    echo $ErrMsg;  
} else {  
    echo $mobileno;  
}  
//*************validition length ****************** */
$mobileno = strlen ($_POST ["Mobile"]);  
$length = strlen ($mobileno);  
  
if ( $length < 10 && $length > 11) {  
    $ErrMsg = "Mobile must have 11 digits.";  
            echo $ErrMsg;  
} else {  
    echo "Your Mobile number is: " .$mobileno;  
}  