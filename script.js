document.addEventListener('DOMContentLoaded', function() {
    const cartItems = {};
    const cartList = document.getElementById('cart-items');
    const totalPriceElem = document.getElementById('total-price');
    const cartIcon = document.getElementById('cart-icon');
    const cart = document.querySelector('.cart');
    const cancelButton = document.getElementById('cancel-button');
    const payButton = document.getElementById('pay-button');

    // Toggle cart visibility
    cartIcon.addEventListener('click', function() {
        cart.classList.toggle('hidden');
    });

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const product = this.closest('.product');
            const productName = product.getAttribute('data-name');
            const productPrice = parseFloat(product.getAttribute('data-price'));
            const productImage = product.getAttribute('data-image');

            // Check if the product is already in the cart
            if (cartItems[productName]) {
                cartItems[productName].quantity += 1;
            } else {
                cartItems[productName] = { price: productPrice, quantity: 1, image: productImage };
            }

            // Update cart display
            updateCart();
        });
    });

    function updateCart() {
        // Clear the cart list
        cartList.innerHTML = '';

        // Calculate total price
        let totalPrice = 0;

        // Add each item to the cart list
        Object.keys(cartItems).forEach(productName => {
            const item = cartItems[productName];
            const li = document.createElement('li');

            li.innerHTML = 
    '<img src="' + item.image + '" alt="' + productName + ' Image">' +
    productName + ' - Ksh ' + item.price + ' x ' + item.quantity + ' = Ksh ' + (item.price * item.quantity).toFixed(2) +
    '<button class="remove-item" data-name="' + productName + '">Remove</button>';
            cartList.appendChild(li);

            totalPrice += item.price * item.quantity;
        });

        // Update the total price
        totalPriceElem.textContent = totalPrice.toFixed(2);

        // Add event listeners to remove buttons
        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-name');
                removeItem(productName);
            });
        });
    }

    function removeItem(productName) {
        if (cartItems[productName]) {
            cartItems[productName].quantity -= 1;

            // If the quantity becomes 0, remove the item from the cart
            if (cartItems[productName].quantity === 0) {
                delete cartItems[productName];
            }

            // Update the cart display
            updateCart();
        }
    }

    // Cancel button clears the cart
    cancelButton.addEventListener('click', function() {
        Object.keys(cartItems).forEach(productName => delete cartItems[productName]);
        updateCart();
    });

    // Pay button triggers an alert (placeholder for actual payment processing)
    payButton.addEventListener('click', function() {
        alert('Proceeding to payment!');
    });
});