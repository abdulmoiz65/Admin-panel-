<?php
include('query.php');
include('header.php');


?>


<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>This is blank page</h3>

                        <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
          <label for="">NAME</label>
          <input type="text" name="pName" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">des</label>
          <input type="text" name="pDes" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">price</label>
          <input type="text" name="pPrice" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">image</label>
          <input type="file" name="pImg" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">quantity</label>
          <input type="text" name="pQty" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">category</label>
         <select class="form-control" name="cId" id="">
            <option> SELECT CATEGORY</option>

            <?php
            $query = $pdo->query("select * from categories");
            $res= $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($res as $cat){

             ?>
             <option value="<?php echo $cat['id']?>"><?php echo $cat['name']?></option>

           <?php
            };
            ?>

         </select>

          <button name="addproducts" type="submit"> Addproducts</button>
         
        </div>
 </form>



                        
                    </div>
                </div>
            </div>
            <!-- Blank End -->




























<?php
include('footer.php');
?>