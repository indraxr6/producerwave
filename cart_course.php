
<?php 
    include "navbar.php";
    include "conn.php";
?>

<body style="background-image: url(images/main-bg-log.jpg);">
<title>Checkout Courses</title>
          

<div class="optext">
<h2 style="color: #4CAF50">Course Cart</h2>
<table class="table table-hover striped" style="color: white;">
<thead>
        <tr>
            <th>NO</th>
            <th>Course Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody style="font-size: 20px;">
        <?php
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?> 
            <tr>
                <td><?=($key_produk+1)?></td>
                <td><?=$val_produk['name']?></td>
                <td>$<?=$val_produk['price']?>,99</td>
                <td><a href="delete_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
 
        <?php endforeach ?>
    </tbody>
</table>
<br>
<a href="checkout.php" class="btn btn-primary" onclick="return confirm('Are you sure want to purchase these item(s)?')">Check Out</a>
<?php 
   
?>
</div>
</body>
