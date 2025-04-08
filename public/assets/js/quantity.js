const quantityInput = document.getElementById('quantity');
const increaseButton = document.getElementById('increase-btn');
const decreaseButton = document.getElementById('decrease-btn');

var value_quantity = 0;

increaseButton.addEventListener('click', function() {
    quantityInput.value = parseInt(quantityInput.value) + 1;
});

decreaseButton.addEventListener('click', function() {
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
});