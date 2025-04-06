const quantityInput = document.getElementById('product_quantity');
const increaseButton = document.getElementById('increase-btn');
const decreaseButton = document.getElementById('decrease-btn');

increaseButton.addEventListener('click', function() {
    quantityInput.value = parseInt(quantityInput.value) + 1;
});

decreaseButton.addEventListener('click', function() {
    if (quantityInput.value > 0) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
});