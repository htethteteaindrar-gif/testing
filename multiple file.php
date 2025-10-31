<form action="" method="POST" enctype="multipart/form-data">
    <p>
        <input type="file" name="image[]" multiple>
    </p>
    <p>
        <input type="submit" value="upload" name="submit">
    </p>

</form>
<?php
echo"<pre>";
if (isset($_POST['submit'])){
    //print_r($_FILES);
    $file=$_FILES;
    foreach($file as $img){
       print_r($img);
      foreach($img['name'] as $k => $image_name){
        $tmp_name=$img['tmp_name'][$k];
        $target_file='image/'. $image_name;
        move_uploaded_file($tmp_name,$target_file);
        echo 'success';
      }
    }
}
