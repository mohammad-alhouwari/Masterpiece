$(document).ready(function () {
    // Function to validate input and add appropriate classes
    function validateInput(input, regex) {
        const value = input.val().trim();
        const isValid = regex.test(value);
        if (isValid) {
            input.removeClass('is-invalid').addClass('is-valid');
        } else {
            input.removeClass('is-valid').addClass('is-invalid');
        }
        return isValid;
    }

    // Validate name input
    $('#name').on('input', function () {
        validateInput($(this), /^.{3,}$/);
    });

    $('#coverImage').on('change', function () {
        const fileName = $(this).val();
        const isValid = /\.(jpg|jpeg|png|gif)$/i.test(
            fileName); // You can modify the allowed image formats
        if (isValid) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        } else {
            $(this).removeClass('is-valid').addClass('is-invalid');
        }
    });
    $('#mediaImage').on('change', function () {
        const fileName = $(this).val();
        const isValid = /\.(jpg|jpeg|png|gif)$/i.test(
            fileName); // You can modify the allowed image formats
        if (isValid) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        } else {
            $(this).removeClass('is-valid').addClass('is-invalid');
        }
    });
    // Validate video input
    $('#video').on('change', function () {
        const fileName = $(this).val();
        const isValid = /\.(mp4|avi|mov)$/i.test(
            fileName); // You can modify the allowed video formats
        if (isValid) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        } else {
            $(this).removeClass('is-valid').addClass('is-invalid');
        }
    });
    $('#mediaVideo').on('change', function () {
        const fileName = $(this).val();
        const isValid = /\.(mp4|avi|mov)$/i.test(
            fileName); // You can modify the allowed video formats
        if (isValid) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        } else {
            $(this).removeClass('is-valid').addClass('is-invalid');
        }
    });
    $('#stock_quantity').on('input', function () {
        validateInput($(this), /^[1-9]\d*$/); // Positive integers only
    });

    // Validate price input
    $('#price').on('input', function () {
        validateInput($(this), /^[1-9]\d*$/); // Positive integers only
    });
    // Validate description input
    $('#description').on('input', function () {
        validateInput($(this), /^.{20,}$/);
    });
    $('#longDescription').on('input', function () {
        validateInput($(this), /^.{30,}$/);
    });

    // Form submission handler
    $('#addCategory').submit(function (event) {
        // Validate all inputs
        const isNameValid = validateInput($('#name'), /^.{3,}$/);
        const isVideoValid = /\.(mp4|avi|mov)$/i.test($('#video').val());
        const isDescriptionValid = validateInput($('#description'), /^.{20,}$/);

        // Prevent form submission if any input is invalid
        if (!isNameValid || !isVideoValid || !isDescriptionValid) {
            event.preventDefault();
        }
    });
});