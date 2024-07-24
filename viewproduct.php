<?php
include("query.php");
include("header.php");



?>             




            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>All products</h3>
                        <table class= "table">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>DESCRIPTION</th>
                                    <th> PRICE</th>
                                    <th> QUANTITY</th>
                                    <th> CATEGORY</th>
                                    <th> IMAGE</th>
                                    <th> ACTION</th>
                                    <th> ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query= $pdo->query("select products.*,categories.name as'category_name'  from products inner join categories on products.c_id =categories.id");
                                $allproducts=$query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($allproducts as $singleproducts){

                                    ?>
                                    <tr>
                                        <td scope="row"> <?php echo $singleproducts['name']?></td>
                                        <td> <?php echo $singleproducts['des']?></td>
                                        <td> <?php echo $singleproducts['price']?></td>
                                        <td> <?php echo $singleproducts['quantity']?></td>
                                        <td> <?php echo $singleproducts['category_name']?></td>
                                        <td> <img height="100px"src="img/<?php echo $singleproducts['image']?>" alt=""></td>
                                        <td> <a  class="btn btn-primary" href="updateproducts.php?id=<?php echo $singleproducts['id']?>"> edit </a> </td>
                                        <td><a  class="btn btn-danger"  href="">  delete</a> </td>
                                    </tr>
                                
                                <?php
                                }
                                ?>
                        
                            </tbody>



                        </table>



                        
                    </div>
                </div>
            </div>
            <!-- Blank End -->

<?php
include("footer.php")

?>