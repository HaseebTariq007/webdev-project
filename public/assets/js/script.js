document.getElementById('addProductBtn').addEventListener('click', function() {
    var productName = document.querySelector('.card-title').dataset.name;
    var productDescription = document.querySelector('.card-text').dataset.description;
    var originalPrice = document.querySelector('.prev-pric1').dataset.originalPrice;
    var discountedPrice = document.querySelector('.curr-pric1').dataset.discountedPrice;

    fetch('/products', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            name: productName,
            description: productDescription,
            original_price: originalPrice,
            discounted_price: discountedPrice
        })
    }).then(response => response.json())
      .then(data => console.log(data))
      .catch(error => console.error('Error:', error));
});
