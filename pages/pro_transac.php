<?php
include'../includes/connection.php';
?>
          <!-- Page Content -->
          <div class="col-lg-12">
            <?php
              $desc = $_POST['description'];
              $pr = $_POST['price'];
              $cat = $_POST['category'];
              $cli = $_POST['customer'];
              $dats_in = $_POST['datestock_in']; 
              $dats_out = $_POST['datestock_out']; 
    
              switch($_GET['action']){
                case 'add':  
                for($i=0; $i < $qty; $i++){
                    $query = "INSERT INTO contrac
                              (CUST_ID, CATEGORY_ID, DESCRIPTION, DATE_STOCK_IN, DATE_STOCK_OUT, PRICE, )
                              VALUES ({$cli},{$cat},'{$desc}','{$dats_in}','{$dats_out}',{$pr})";
                    mysqli_query($db,$query)or die ('Error in updating product in Database '.$query);
                    }
                break;
              }
            ?>
              <script type="text/javascript">window.location = "product.php";</script>
          </div>

<?php
include'../includes/footer.php';
?>