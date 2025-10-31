
<form action="" method="POST">
 <p>
    <input type="checkbox" name="fruit[]" value="Mango">
    <input type="checkbox" name="fruit[]" value="Apple">
 </p>
 <p>
    <input type="radio" name="gender" value="Male">
     <input type="radio" name="gender" value="Female">
   
 </p>
 <p>
    <select name="colour[]" multiple>
      <option value="red">RED</option>
      <option value="green">GREEN</option>
      <option value="blue">BLUE</option>
</select>
 <p>
   <input type="submit">
 </p>
</form>
<?php

if(isset($_POST['colour'])){
foreach($_POST['colour']as $c){
echo $c;
}
}
?>

