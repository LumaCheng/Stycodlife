<!DOCTYPE html>
<html>
<title>Be a stylish Coder!</title>
<meta charset="UTF-8">
  <body>
    <?php
        extract( $_POST );

        $userVerified = 0;
        $file = fopen("login.txt", "rt");

        if(!$USERNAME || !$PASSWORD){
          fieldsblank();
          die();
        }

        while( !feof( $file ) && !$userVerified ){

           $line = fgets($file, 255);
           $line = chop ($line);
           $field = explode( ",", $line, 2 );


           if($USERNAME == $field[0]){
             $userVerified = 1;
             if(checkPassword($PASSWORD, $field) == true){
               accessGranted($USERNAME);
             }
             else {
               wrongPassword();
             }
           }

        }

        fclose($file);

        if(!$userVerified){
           accessDenied();
         }

       function checkPassword($userpassword, $filedata){
         if($userpassword == $filedata[1]){
           return true;
         }
         else {
           return false;
         }
       }

       function accessGranted($name){
           print("<title>Success!</title></head><body style=\"color:#000;text-align:center\"><strong> Permission has been granted, $name.<br/></strong>");
       }

       function wrongPassword(){
           print("<title>Access Denied!</title></head><body style=\"color:#000;text-align:center\"><strong>  You enter a wrong password! $name.<br/></strong>");
       }

       function accessDenied(){
           print("<title>Access Denied!</title></head><body style=\"color:#000;text-align:center\"> <strong> You were denied access to this server! $name.<br/></strong>");
       }
       function fieldsblank(){
           print("<title>Access Denied!</title></head><body style=\"color:#000;text-align:center\"> <strong> Please fill in all form fields!<br/></strong>");
       }

    ?>
  </body>
</html>
