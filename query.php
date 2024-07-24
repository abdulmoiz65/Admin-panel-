<?php
include('dbcon.php');
session_start();

if(isset($_POST['login'])) {
   
   $useremail =$_POST['email'];
   $userpassword = $_POST['password'];
   $query=$pdo ->prepare(" select * from users where email= :Email AND password = :Password");
   $query->bindParam('Email',$useremail);
   $query->bindParam('Password',$userpassword);
   $query->execute();
   $res = $query->fetch(PDO::FETCH_ASSOC);
        // print_r($res);
   if ($res['role']== 1) {
     $_SESSION['email'] =$res['email'];
     echo"<script>alert(' login succesfully');
location.assign('index.php') 
</script>";
   }
    else {
      echo "<script>alert('invalid credentials')</script>";
    }


}

if (isset($_POST['addCategory'])) {
$cName = $_POST['cName'];
$cDes = $_POST['cDes'];
$imageName = $_FILES['cImage']['name'];
$imagetmpName=$_FILES['cImage']['tmp_name'];
$extension=pathinfo($imageName,PATHINFO_EXTENSION);
$destination= 'img/'.$imageName;
if($extension == "jpg" || $extension == "png" || $extension == "jpeg" ){
   if(move_uploaded_file($imagetmpName,$destination)){
      $query = $pdo->prepare("insert into  categories( name, des , image) values(:cname,:cDes,:cImage)");
      $query->bindParam('cname',$cName);
      $query->bindParam('cDes',$cDes);
      $query->bindParam('cImage',$imageName);
      $query->execute();
      echo "<script> alert('category added succesfully');
      </script>";
   }
}



  
}


//Update Category

if (isset($_POST['updateCategory'])) {
   $cName = $_POST['cName'];
   $cDes = $_POST['cDes'];
   $cId = $_POST['c_Id'];
   $query = $pdo->prepare("update categories set name = :cName, des = :cDes where id = :cId");
   if(isset($_FILES['cImage'])){
     $imageName = $_FILES['cImage']['name'];
     $imageTmpName = $_FILES['cImage']['ymp_name'];
     $extension = pathinfo($imageName,PATHINFO_EXTENSION);
     $destination = "img/".$imageName;
   
     if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
         if(move_uploaded_file($imageTmpName,$destination)){
             $query = $pdo->prepare("update categories set name = :cName, des = :cDes,image =cImage where id = :cId");
             $query->bindParam('cImage',$imageName);
         

   }
 }
}
             $query->bindParam(':cId',$cId); 
             $query->bindParam('cName',$cName);
             $query->bindParam('cDes',$cDes);
             $query->execute();
             echo "<script>alert('Category updated successfully');
             </script>";
         
}


if (isset($_POST['addproducts'])) {
   $pName=$_POST['pName'];
   $pDes=$_POST['pDes'];
   $pPrice=$_POST['pPrice'];
   $pQty=$_POST['pQty'];
   $cId=$_POST['cId'];
   $imageName=$_FILES['pImg']['name'];
   $imagetmpName=$_FILES['pImg']['tmp_name'];
   $extension=pathinfo($imageName,PATHINFO_EXTENSION);
   $destination= 'img/'.$imageName;
   if($extension == "jpg" || $extension == "png" || $extension == "jpeg" ){
      if(move_uploaded_file($imagetmpName,$destination)){
         $query = $pdo->prepare("insert into  products( name, des , image , price, quantity, c_id) values(:pName,:pDes,:pImage,:pPrice,:pQty,:cId)");
         $query->bindParam('pName',$pName);
         $query->bindParam('pDes',$pDes);
         $query->bindParam('pImage',$imageName );
         $query->bindParam('pPrice',$pPrice);
         $query->bindParam('pQty',$pQty);
         $query->bindParam('cId', $cId);
         $query->execute();
         echo "<script> alert('product added succesfully');
         </script>";
      }
   }
   
   
   
     
   }
   
   
?>




