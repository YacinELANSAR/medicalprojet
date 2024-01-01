
    const input = document.querySelector("#phone");
    const iti = window.intlTelInput(input, {
        initialCountry: "ma",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
    });
