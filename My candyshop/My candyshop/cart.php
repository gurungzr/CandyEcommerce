<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $productData = array(
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'quantity' => 1
    );
    $existingProductIndex = array_search($productData['name'], array_column($_SESSION['cart'], 'name'));

    if ($existingProductIndex !== false) {
        $_SESSION['cart'][$existingProductIndex]['quantity']++;
    } else {
        $_SESSION['cart'][] = $productData;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('candybabies.png');
            background-size : cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .remove-btn {
            background-color: #ff5252;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .quantity-input {
            width: 40px;
            text-align: center;
            margin: 0 10px;
        }

        .grand-total-container {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .grand-total-label {
            font-size: 18px;
            color: #333;
        }

        .grand-total-amount {
            font-size: 24px;
            color: #ff5252;
            margin-top: 5px;
        }

        .proceed-btn {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .back-btn {
    padding: 10px 20px;
    background-color: #2196F3;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    outline: none;
    margin-top: 20px; /* Add margin-top to create space between the table and the button */
    margin-left: auto; /* Align to the right */
    margin-right: auto; /* Align to the left */
    display: block; /* Ensure button occupies full width */
    animation: pulse 1s infinite alternate; /* Apply animation */
    transition: transform 0.3s; /* Smooth transformation on hover */
}

/* Animation keyframes for pulse */
@keyframes pulse {
    0% {
        transform: scale(1); /* Initial scale */
    }
    100% {
        transform: scale(1.4); /* Slightly larger scale */
    }
}

.back-btn:hover {
    background-color: #0b7dda; /* Change background color on hover */
}

    </style>
</head>

<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Per Cost</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody id="cartItems">
                <!-- Cart items will be dynamically added here -->
            </tbody>
        </table>
        <button class="back-btn" onclick="goToMainPage()">Back to Main</button>
    </div>

    <div class="container">
        <div class="grand-total-container">
            <h4 class="grand-total-label">Grand Total</h4>
            <h4 class="grand-total-amount" id="grandTotal">$0.00</h4>
        </div>

        <button class="proceed-btn" onclick="proceedToPayment()">Proceed to Payment</button>
    </div>
    <div>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item) : ?>
                <li>
                    <?php echo $item['name']; ?> - Quantity: <?php echo $item['quantity']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script>
        const excludedProducts = [];
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        function updateCart() {
            const cartItemsContainer = document.getElementById('cartItems');
            const grandTotalElement = document.getElementById('grandTotal');
            let grandTotal = 0;

            cartItemsContainer.innerHTML = '';

            cart.forEach(item => {
                if (!excludedProducts.includes(item.name)) {
                    const subTotal = item.quantity * item.price;
                    grandTotal += subTotal;

                    item.quantity = Math.max(item.quantity, 0);

                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${item.name}</td>
                        <td>$${item.price.toFixed(2)}</td>
                        <td><input type="number" class="quantity-input" value="${item.quantity}" onchange="updateQuantity(${cart.indexOf(item)}, this.value)"></td>
                        <td>$${subTotal.toFixed(2)}</td>
                        <td><button class="remove-btn" onclick="removeItem(${cart.indexOf(item)})">Remove</button></td>
                    `;

                    cartItemsContainer.appendChild(row);
                }
            });

            grandTotalElement.textContent = `$${grandTotal.toFixed(2)}`;
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        function addItem(item) {
            if (!excludedProducts.includes(item.name)) {
                const existingItem = cart.find(i => i.name === item.name);

                if (existingItem) {
                    existingItem.quantity++;
                } else {
                    cart.push({ ...item, quantity: 1 });
                }

                updateCart();
            }
        }

        function updateQuantity(index, newQuantity) {
            cart[index].quantity = Math.max(parseInt(newQuantity), 0);
            updateCart();
        }

        function removeItem(index) {
            cart.splice(index, 1);
            updateCart();
        }

        function proceedToPayment() {
            if (cart.length === 0) {
                alert('Your cart is empty.');
            } else {
                window.location.href = 'order_success.php';
                cart = [];
                localStorage.removeItem('cart');
                updateCart();
            }
        }

        // Setup
        updateCart();
    </script>

<script>
    function goToMainPage() {
        window.location.href = 'main.php';
    }
</script>

</body>
</html>
