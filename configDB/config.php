<?Php 

define('SERVER_NAME', 'localhost');
define('USER_NAME', 'root');
define('USER_PASSWORD', '');
define('DATABASE_NAME', 'rest_api');


$conn = new mysqli(SERVER_NAME,USER_NAME,USER_PASSWORD,DATABASAE_NAME);
if(!$conn){
    echo "errro in connection";
}





?>