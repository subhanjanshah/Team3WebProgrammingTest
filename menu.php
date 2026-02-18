<?php 
$pageTitle = "Menu - CGG Cafe";
include 'header.php'; 
?>
<div class="parallax-section" style="height: 50vh;">
    <div class="content-layer">
        <h1>Our Menu</h1>
        <p class="cafe-text">Handcrafted & Fresh</p>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4 justify-content-center">
        
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Espresso', 2.00, '../photosused/espresso.jpg')" style="cursor: pointer;">
                <img src="../photosused/espresso.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Espresso</h3>
                    <p class="card-text fw-bold text-danger fs-5">2.00€</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Americano', 3.50, '../photosused/americano.jpg')" style="cursor: pointer;">
                <img src="../photosused/americano.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Americano</h3>
                    <p class="card-text fw-bold text-danger fs-5">3.50€</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Cappuccino', 4.50, '../photosused/cappuccino.jpg')" style="cursor: pointer;">
                <img src="../photosused/cappuccino.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Cappuccino</h3>
                    <p class="card-text fw-bold text-danger fs-5">4.50€</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Cafe Mocha', 5.00, '../photosused/cafemocha.jpg')" style="cursor: pointer;">
                <img src="../photosused/cafemocha.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Cafe Mocha</h3>
                    <p class="card-text fw-bold text-danger fs-5">5.00€</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Hot Chocolate', 5.50, '../photosused/hotchocolate.jpg')" style="cursor: pointer;">
                <img src="../photosused/hotchocolate.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Hot Chocolate</h3>
                    <p class="card-text fw-bold text-danger fs-5">5.50€</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Iced Latte', 3.45, '../photosused/icedlatte.jpg')" style="cursor: pointer;">
                <img src="../photosused/icedlatte.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Iced Latte</h3>
                    <p class="card-text fw-bold text-danger fs-5">3.45€</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Iced Matcha', 4.50, '../photosused/icedmatcha.jpg')" style="cursor: pointer;">
                <img src="../photosused/icedmatcha.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Iced Matcha</h3>
                    <p class="card-text fw-bold text-danger fs-5">4.50€</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Butter Croissant', 2.50, '../photosused/buttercrossiant.jpg')" style="cursor: pointer;">
                <img src="../photosused/buttercrossiant.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Butter Croissant</h3>
                    <p class="card-text fw-bold text-danger fs-5">2.50€</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Choco Muffin', 3.00, '../photosused/chocomuffin.jpg')" style="cursor: pointer;">
                <img src="../photosused/chocomuffin.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Choco Muffin</h3>
                    <p class="card-text fw-bold text-danger fs-5">3.00€</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow border-0 menu-card-hover" onclick="openOrderModal('Cheesecake Slice', 5.50, '../photosused/cheesecake.jpg')" style="cursor: pointer;">
                <img src="../photosused/cheesecake.jpg" class="card-img-top" style="height: 250px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title h4">Cheesecake Slice</h3>
                    <p class="card-text fw-bold text-danger fs-5">5.50€</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="orderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 15px; border: none;">
            <div class="modal-header" style="background: #472717; color: white;">
                <h5 class="modal-title" id="modalItemName">Order Item</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <img id="modalItemImage" src="" class="card-img-top" style=" height: 360px; object-fit: cover;">
                <form id="orderForm">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Quantity (1-10):</label>
                        <input type="number" id="orderQty" name="quantity" min="1" max="10" value="1" class="form-control" onchange="calculateTotal()">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Special Notes:</label>
                        <input type="text" id="orderNotes" name="notes" placeholder="Extra sugar, oat milk etc." class="form-control">
                    </div>
                    <div class="text-center">
                        <h4 style="color: #472717;">Total: <span id="displayTotal">0.00</span>€</h4>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn" onclick="confirmOrder()" style="background: #472717; color: white;">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
let currentPrice = 0;
let currentName = "";
const myModal = new bootstrap.Modal(document.getElementById('orderModal'));

function openOrderModal(name, price, image) {
    currentName = name;
    currentPrice = price;
    document.getElementById('modalItemName').innerHTML = name;
    document.getElementById('modalItemImage').src = image;
    document.getElementById('orderQty').value = 1;
    document.getElementById('orderNotes').value = "";
    calculateTotal();
    myModal.show();
}

function calculateTotal() {
    let qty = document.getElementById('orderQty').value;
    let total = currentPrice * qty;
    document.getElementById('displayTotal').innerHTML = total.toFixed(2);
}

function confirmOrder() {
    let finalQty = document.getElementById('orderQty').value;
    let finalNotes = document.getElementById('orderNotes').value;
    
    if(finalQty >= 1) {
        let orderData = {
            name: currentName,
            price: currentPrice,
            quantity: finalQty,
            notes: finalNotes,
            total: currentPrice * finalQty
        };

        let cart = JSON.parse(localStorage.getItem('cgg_cart')) || [];
        cart.push(orderData);
        localStorage.setItem('cgg_cart', JSON.stringify(cart));

        alert(finalQty + " x " + currentName + " added to cart!");
        myModal.hide();
    }
}
function addToCart() {
    let finalQty = document.getElementById('orderQty').value;
    let finalNotes = document.getElementById('orderNotes').value;

    let order = {
        name: currentName,
        price: currentPrice,
        qty: finalQty,
        notes: finalNotes
    };

    // We use a fresh array [order] to replace whatever was there before
    localStorage.setItem('cgg_cart', JSON.stringify([order]));

    alert("Order added! Going to cart...");
    window.location.href = "cart.php";
}
</script>
<?php include 'footer.php'; ?>
