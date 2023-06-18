<html>
	<head>
		<meta charset="utf-8">
        <title>Shop</title>
        <meta name="description" content="Shopping Spree | Village 88">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>">
	</head>
    <body>
        <header>
            <div class="logo">
                <a href="/">My Store</a>    
            </div>
            <div class="cart">
                <a href="/purchases/cart">Cart (<?= $count ?>)</a>    
            </div>       
        </header>

        <div class="product">
            <p class="msgs"><?= $this->session->flashdata('msgs') ?></p>
            <div class="container">
                <img src="/assets/Product (1).jpg"></img>
                <form action="/products/buy/1" method="POST">
                    <input type="number" name="qty" placeholder="0">
                    <div class="btn">
                        <input type="submit" name="buy_btn" value="Buy Now">
                    </div>
                    <h2 class="price">$20</h2>
                </form>
            </div>
            <div class="container">
                <img src="/assets/Product (2).jpg"></img>
                <form action="/products/buy/2" method="POST">
                    <input type="number" name="qty" placeholder="0">
                    <div class="btn">
                        <input type="submit" name="buy_btn" value="Buy Now">
                    </div>
                    <h2 class="price">$30</h2>
                </form>
            </div>
            <div class="container">
                <img src="/assets/Product (3).jpg"></img>
                <form action="/products/buy/3" method="POST">
                    <input type="number" name="qty" placeholder="0">
                    <div class="btn">
                        <input type="submit" name="buy_btn" value="Buy Now">
                    </div>
                    <h2 class="price">$40</h2>
                </form>
            </div>
        </div>
    </body>
</html>