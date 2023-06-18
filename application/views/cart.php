<html>
	<head>
		<meta charset="utf-8">
        <title>Shop | Cart</title>
        <meta name="description" content="Shopping Spree | Village 88">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>">
	</head>
    <body>
        <header>
            <div class="logo">
                <a href="/">My Store</a>    
            </div>
            <div class="cart">
                <a href="/">Catalog</a>    
            </div>       
        </header>
        
        <body>
        <div class="cart_container">
            <div class="checkout">
                <a href="/">Add more</a>
                <h1>Checkout</h1>
            </div>
            <div class="catalog">
<?php
if (isset($purchases)){
    $total = 0;
    foreach ($purchases as $purchase){
        $temp = $purchase['qty'] * $purchase['price'];
        $total = $total + $temp;
    }
?>
                <h3>Total: <?= $total ?></h3>
<?php
}
?>    
            </div> 
            <?= $this->session->flashdata('error') ?>
            <table>
                <tr>
                    <th>Item name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
<?php
    foreach ($purchases as $purchase){
?>
                <tr>
                    <td><?= $purchase['name'] ?></td>
                    <td><?= $purchase['qty'] ?></td>
                    <td>$<?= $purchase['qty'] * $purchase['price'] ?></td>
                    <td>
                        <form action="/purchases/delete/<?= $purchase['id'] ?>" method="POST">
                        <div class="btn">
                            <input type="submit" name="add" value="Delete">
                        </div>
                        </form>
                    </td>
                </tr>
<?php
    }
?> 
            </table>
        </div>
    </body>
</html>