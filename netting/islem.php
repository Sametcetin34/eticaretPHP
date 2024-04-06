<?php
include("baglan.php");

if (isset($_POST["genelayarkaydet"])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET 
    
    ayar_title=:ayar_title,
    ayar_description=:ayar_description,
    ayar_keywords=:ayar_keywords,
    ayar_author=:ayar_author
    WHERE ayar_id=0");


$ayarkaydet->execute(array(
    'ayar_title'=> $_POST['ayar_title'],
    'ayar_description'=> $_POST['ayar_description'],
    'ayar_keywords'=> $_POST['ayar_keywords'],
    'ayar_author'=> $_POST['ayar_author']
));

if ($update) {
    echo "güncelleme başarılı";
}   
   
  
}






?>