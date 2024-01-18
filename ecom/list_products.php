<?php
include("config.php");

if(isset($_POST['product_id'])){
    $delete_id = $_POST['product_id'];
   
    echo $delete_id;

    $sql = "DELETE FROM products WHERE id=$delete_id";

    if ($link->query($sql) === TRUE) {
    // echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $link->error;
    }

}
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Admin List Products</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-4">
                <h3 class="text-center mb-3">Admin Panel</h3>
                <nav>
                    <a href="dashboard.php">Dashboard</a>
                    <a href="add_product.php">Add Product</a>
                    <a href="list_products.php">List Products</a>
                    <a href="orders.php">Orders</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
            <div class="col-8">
    <div class="admin-container">
        <h1 class="form__title">Admin List Products</h1>
        <table width="100%" tbborder="1">
            <tr>
                <th>Sr.</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Delete</th>
            </tr>
            <?php
                $query = " select * from products ";
                $result = $link->query($query);
                $i = 1;
                while ($data = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $i; $i++;?>.</td>
                    <td><img src="./images/<?php echo $data['product_image']; ?>" width="50px"></td>
                    <td><?php echo $data['product_name']; ?></td>
                    <td><?php echo $data['product_price']; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="product_id" value="<?php echo $data['id']; ?>">
                            <input type="submit" name="btn_delete" class="btn btn-danger" value="Delete"/>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </div>
    </div>
    </div>
</body>
