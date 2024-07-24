<?php
include("query.php");
include("header.php");



?>             




            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>All categories</h3>
                        <table class= "table">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>DESCRIPTION</th>
                                    <th> IMAGE</th>
                                    <th> ACTION</th>
                                    <th> ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query= $pdo->query("select * from categories");
                                $allcategories=$query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($allcategories as $singlecategory ){

                                    ?>
                                    <tr>
                                        <td scope="row"> <?php echo $singlecategory['name']?></td>
                                        <td> <?php echo $singlecategory['des']?></td>
                                        <td> <img height="100px"src="img/<?php echo $singlecategory['image']?>" alt=""></td>
                                        <td> <a  class="btn btn-primary" href="updatecat.php?id=<?php echo $singlecategory['id']?>"> edit </a> </td>
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