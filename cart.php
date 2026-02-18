<?php // include 'db_connect.php'; 
include 'header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopping Cart</title>

<style>

      .cartbody 
      {
          display: flex;
          flex-direction: column;
          min-height: 100vh;
          margin: 0;
          justify-content: center;
      }

      .cart-container 
      {
          flex: 1;
          margin-bottom: 40px;
      }

      .main-footer 
      {
          width: 100%;
          padding: 20px 0;
          background-color: transparent; /* Or #3d2b1f if you want a dark cafe theme */
          text-align: center;
          color: #888;
          font-size: 0.9rem;
          border-top: 1px solid #eee; /* Subtle line to separate from the cart */
      }


        .cartbody
            {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f4f7f6;
                display: flex;
                justify-content: center;
                padding: 50px;
            }

            .cart-container
            {
                width: 100%;
                max-width: 800px;
                background: white;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            }

            h2
            { 
                color: #333; 
                border-bottom: 2px solid #eee; 
                padding-bottom: 10px; 
            }

            table{
                width: 100%; 
                border-collapse: collapse; 
                margin-top: 20px; 
            }

            th{ 
                text-align: left; 
                color: #888; 
                font-weight: 600; 
                padding: 10px; 
                border-bottom: 1px solid #eee; 
            }

            td{ 
                padding: 15px 10px; 
                border-bottom: 1px solid #fafafa; 
                vertical-align: middle; 
            }

            .product-img{ 
                width: 60px; 
                height: 60px; 
                border-radius: 8px; 
                object-fit: cover; 
                background: #eee; 
            }

            .btn-remove{ 
                color: #ff4d4d; 
                text-decoration: none; 
                font-size: 0.9rem; 
                transition: 0.3s; 
            }

            .btn-remove:hover{ 
                color: #cc0000; 
            }

            .checkout-section{ 
                margin-top: 30px; 
                text-align: right; 
            }

            .total-price{ 
                font-size: 1.5rem; 
                font-weight: bold; 
                color: #472717; 
            }

            .btn-checkout 
            {
                background: #472717;
                color: white;
                padding: 12px 30px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                font-size: 1rem;
                margin-top: 15px;
            }
    </style>

    </head>
<body class="cartbody">
    <div class="cart-container">
        <h2>Shopping Cart</h2>
        <table>
            
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    
                </tr>

            <content>
                <tr>
                    <td><strong>Premium Coffee Beans</strong></td>
                    <td>$15.00</td>
                    <td>1</td>
                    <td>$10.00</td>
                    <td><a href="#" class="btn-remove">Remove</a></td>
                </tr>
                <tr>
                    <td><strong>Chai Latte</strong></td>
                    <td>$5.00</td>
                    <td>1</td>
                    <td>$15.00</td>
                    <td><a href="#" class="btn-remove">Remove</a></td>
                </tr>
            </content>
        </table>

        <div class="checkout-section">
            <p>Total: <span class="total-price">$15.00</span></p>
            <button class="btn-checkout">Order Now</button>
        </div>
    </div>
</body>
    
</html>
<?php include 'footer.php'; ?>
