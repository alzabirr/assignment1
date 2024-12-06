<!-- 2. Basic Authentication System -->

<?php 
define("USERNAME", "rafi");
define("PASSWORD", "1234");

echo "enter your USERNAME : ";
$inputUsername = readline();

echo "enter your password :";
$inputPassword = readline();

if($inputUsername === USERNAME && $inputPassword === PASSWORD){
    echo "login successful";

}
else{
    echo "angry";
}
