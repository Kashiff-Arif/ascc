document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.js-datepicker').forEach(input => {
        const picker = new Datepicker(input, {
            format: 'dd-mm-yyyy',
            autohide: true
        });
        const icon = input.closest('.form-element').querySelector('.js-datepicker');
        icon.addEventListener('click', () => {
            picker.show();
        });
    });
});