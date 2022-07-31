<?php
    $name = '';
    $email = '';
    if(isset($_POST['name'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $error = '';

        if($name == ''){
            $error .= 'Please Enter Your Name</br>';
        }
        if($email == ''){
            $error .= 'Please Enter Your Email</br>';
        }

        if($error != ''){
            echo $error;
        }else{
            echo "name is $name and email is $email";
        }


        // echo "name is {$_POST['name']} and email is {$_POST['email']}";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sticky Form</title>
    </head>
    <body>

        <div class="container">
            <h1>Sticky Form</h1>
            <form action="l16stickyform.php" method="post">
                <div class="form-group">
                    <label for="name">Name : </label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>"/>

                </div>
                <br/>
                <div class="form-group">
                    <label for="name">Email : </label>
                    <input type="text" name="email" id="eail" class="form-control" value="<?php echo $email ?>"/>
                </div>
                <br/>
                <div class="d-grid">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        
    </body>
</html>