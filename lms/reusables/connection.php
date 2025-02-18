<?php
          $connect = mysqli_connect(
            'localhost', // url
            // if you are hosting the website on a server, you will have to change the url
            // the hosting will provide you with the url
            'root', // username
            'root', // password
            'php_school', // database name (check on phpmyadmin)
            '3308'
          );
          if(!$connect){
            echo 'Error Code: ' . mysqli_connect_errno(); // error code in number form
            echo 'Error Message: ' . mysqli_connect_error(); // error message
            exit; // exit the program if there is an error 
            // exit is usually used inside the loops
            // die is used outside the loops but performs the same function
          }
          
        ?>