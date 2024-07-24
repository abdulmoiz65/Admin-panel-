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
          <input type="text" name="cName" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">Description</label>
          <input type="text" name="cDes" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">image</label>
          <input type="file" name="cImage" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <button name="addCategory" type="submit"> Addcategory</button>
         
        </div>
 </form>



                        
                    </div>
                </div>
            </div>
            <!-- Blank End -->




























<?php
include('footer.php');
?>