<?php 
$pageTitle = "My Cart - CGG Cafe";
include 'header.php'; 
?>

<div class="parallax-section" style="height: 40vh; background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('img.jpg');">
    <div class="content-layer">
        <h1>Your Cart</h1>
        <p class="cafe-text">Review your order</p>
    </div>
</div>

<div class="scrolling-layer" style="background-color: #FBF6F0; min-height: 60vh;">
    <div class="container">
        <div class="cart-container-box" style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
            
            <h2 style="font-family: 'Playfair Display', serif; color: #472717; margin-bottom: 30px; border-bottom: 2px solid #472717; padding-bottom: 10px;">
                Shopping Cart
            </h2>

            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid #eee; text-align: left;">
                        <th style="padding: 15px; color: #8d6e63; text-transform: uppercase; font-size: 13px;">Product</th>
                        <th style="padding: 15px; color: #8d6e63; text-transform: uppercase; font-size: 13px;">Price</th>
                        <th style="padding: 15px; color: #8d6e63; text-transform: uppercase; font-size: 13px;">Qty</th>
                        <th style="padding: 15px; color: #8d6e63; text-transform: uppercase; font-size: 13px;">Subtotal</th>
                        <th style="padding: 15px; color: #8d6e63; text-transform: uppercase; font-size: 13px;">Action</th>
                    </tr>
                </thead>
                <tbody id="cartDisplay"></tbody>
            </table>

            <div class="checkout-section" style="margin-top: 40px; text-align: right; border-top: 1px solid #eee; padding-top: 20px;">
                <p style="font-family: 'Montserrat', sans-serif; font-size: 18px; color: #666;">
                    Total: <span class="total-price" id="finalTotal" style="font-size: 32px; font-weight: 700; color: #472717; margin-left: 15px;">0.00€</span>
                </p>
                
                <div style="margin-top: 20px;">
                    <button class="btn-box btn-box-dark" onclick="checkout()" style="background: #472717; color: #FBF6F0 !important; cursor: pointer;">Order Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="dbOrderForm" action="create.php" method="POST" style="display: none;">
    <input type="hidden" name="product_name" id="db_product">
    <input type="hidden" name="price" id="db_price">
    <input type="hidden" name="quantity" id="db_qty">
    <input type="hidden" name="subtotal" id="db_subtotal">
</form>

<script>
    function displayCart() {
        const cartData = JSON.parse(localStorage.getItem('cgg_cart')) || [];
        const displayArea = document.getElementById('cartDisplay');
        const totalArea = document.getElementById('finalTotal');
        
        displayArea.innerHTML = "";
        let totalSum = 0;

        if (cartData.length === 0) {
            displayArea.innerHTML = `<tr><td colspan='5' style='text-align:center; padding: 50px; font-family: Lora, serif; font-size: 20px;'>Your cart is empty. <br><a href='menu.php' style='color:#472717;'>Go grab a coffee!</a></td></tr>`;
            totalArea.innerHTML = "0.00€";
            return;
        }

        cartData.forEach((item, index) => {
            let itemQty = item.qty || item.quantity || 0;
            let itemPrice = parseFloat(item.price) || 0;
            let subtotal = itemPrice * itemQty;
            totalSum += subtotal;

            displayArea.innerHTML += `
                <tr style="border-bottom: 1px solid #fafafa;">
                    <td style="padding: 20px;">
                        <strong style="font-family: 'Playfair Display', serif; font-size: 18px; color: #472717;">${item.name}</strong><br>
                        <small style="color: #888;">Note: ${item.notes || 'None'}</small>
                    </td>
                    <td style="padding: 20px; font-family: 'Lora', serif;">${itemPrice.toFixed(2)}€</td>
                    <td style="padding: 20px;">${itemQty}</td>
                    <td style="padding: 20px; font-family: 'Lora', serif; font-weight: 700;">${subtotal.toFixed(2)}€</td>
                    <td style="padding: 20px;">
                        <a href="#" onclick="clearItem()" style="color: #ff4d4d; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 1px;">Remove</a>
                    </td>
                </tr>
            `;
        });
        totalArea.innerHTML = totalSum.toFixed(2) + "€";
    }

    function clearItem() {
        localStorage.removeItem('cgg_cart');
        displayCart();
    }

    function checkout() {
        const cartData = JSON.parse(localStorage.getItem('cgg_cart')) || [];
        if (cartData.length === 0) return;

        const item = cartData[0];
        const qty = item.qty || item.quantity;
        const price = parseFloat(item.price);

        document.getElementById('db_product').value = item.name;
        document.getElementById('db_price').value = price;
        document.getElementById('db_qty').value = qty;
        document.getElementById('db_subtotal').value = (price * qty).toFixed(2);

        localStorage.removeItem('cgg_cart'); 
        document.getElementById('dbOrderForm').submit();
    }

    window.onload = displayCart;
</script>

<?php include 'footer.php'; ?>
