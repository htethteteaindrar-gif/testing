<form action="" method="POST" enctype="multipart/form-data">
    <p>
        <input type="file" name="image">
    </p>
    <p>
        <input name="upload" type="submit" value="Upload">
    </p>
    
</form>
<?php
if(isset($_POST['upload'])){
    echo "<pre>";
    print_r($_FILES);
   $img_name=$_FILES['image']['name'];
   $target_file="image/".$img_name;
   $tmp=$_FILES['image']['tmp_name'];
   if(move_uploaded_file($tmp,$target_file)){
    echo $img_name.'success!';
   } else{
    echo 'there is error';
   }
}
