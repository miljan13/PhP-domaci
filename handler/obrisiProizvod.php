<?php
require '../konekcija.php';
require '../model/proizvod.php';

    $id =$_POST['id'];  

    $proizvod = new Proizvod($id,null,null,null);

    if($proizvod->delete($conn,$id)){
      echo "Okay";
    }else{
      echo "Not okay";
    }
 ?>