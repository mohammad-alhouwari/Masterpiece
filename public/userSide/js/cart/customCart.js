

// cart button
$(document).ready(function() {
    $('#cart').click(function() {
        var productId = $(this).attr('name');
        var quantity = $('#sst').val();
        $.ajax({
            type: 'POST',
            url: '{{ route("cartAdd") }}',
            data: {
                id:productId,
                quantity:quantity
            },
            success: function(response) {
                alert('Product added to cart successfully!');
            },
            error: function(error) {
                console.error(error);
            }
        });
    });
});

