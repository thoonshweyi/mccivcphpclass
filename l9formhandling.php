<?php
    // echo "Request Method is {$_SERVER['REQUEST_METHOD']}";

    // warning appear because $_POST['name'] is exist when form is submitted.
    // echo "{$_POST['name']}";

    if(isset($_POST['submit'])){
        // echo "{$_POST['name']}";

        $name = $_POST['name'];
        $skills = implode(' ',$_POST['skills']);
        $gender = $_POST['gender'];
        $education = $_POST['edu'];
        $bio = $_POST['bio'];

        //for picture
        $temp_path = $_FILES['photo']['tmp_name'];
        // $filename = $_FILES['photo']['name'];
        $filename = basename($_FILES['photo']['name']);//basename() return file name from a path 
        $target_dir = "uploads";
        move_uploaded_file($temp_path, "$target_dir/$filename");//move uploaded file from temp dir to target dir
        



        echo "<p>Name : {$name}</p>";
        echo "<p>Skills : {$skills}</p>";
        echo "<p>Gender : {$gender}</p>";
        echo "<p>Education : {$education}</p>";
        echo "<p>Bio : {$bio}</p>";
        echo "<img src=\"{$target_dir}/{$filename}\" />";
    
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Handling</title>
    </head>
    <body>
        

        <h1>Form</h1>
        <form action="l9formhandling.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name : </label>
                <input type="text" name="name" id="name" class="" autocomplete="off"/>
            </div>

            <div class="form-group">
                <label for="">Skill : </label>
                <input type="checkbox" name="skills[]" id="english" class="" value="english"/><label for="english">English</label>
                <input type="checkbox" name="skills[]" id="computer" class="" value="computer"/><label for="computer">Computer</label>
                <input type="checkbox" name="skills[]" id="marketing" class="" value="marketing"/><label for="marketing">Marketing</label>
                <input type="checkbox" name="skills[]" id="excel" class="" value="excel"/><label for="excel">Excel</label>
            </div>

            <div class="form-group">
                <label for="">Gender : </label>
                <input type="radio" name="gender" id="male" class="" value="male"/><label for="male">Male</label>
                <input type="radio" name="gender" id="female" class="" value="female"/><label for="female">Female</label>
            </div>

            <div class="form-group">
                <label for="edu">Education : </label>
                <select name="edu" id="edu" class="">
                    <option value="master">Master Degree</option>
                    <option value="graduate">Graduate</option>
                    <option value="undergraduate">Undergraduate</option>
                </select>
            </div>

            <div class="form-group">
                <label for="bio">Biography : </label>
                <textarea name="bio" id="bio"></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Photo : </label>
                <input type="file" name="photo" id="hopto" class=""/>
            </div>

            <input type="submit" name="submit" value="submit"/>


        </form>

    </body>
</html>