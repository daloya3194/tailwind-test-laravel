var input = document.querySelector("#phone"),
    errorMsg = document.querySelector("#error-msg"),
    validMsg = document.querySelector("#valid-msg"),
    valid = document.querySelector("#valid");

// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
var iti = window.intlTelInput(input, {
    // any initialisation options go here
    utilsScript: "/js/int-tel-input/utils.js?",
    separateDialCode: true,
    initialCountry: "auto",
    geoIpLookup: function (success, failure) {
        $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "US";
            success(countryCode);
        });
    },
});

var reset = function() {
    valid.value = 0;
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hidden");
    validMsg.classList.add("hidden");
};

// on blur: validate
input.addEventListener('blur', function() {
    reset();
    if (input.value.trim()) {
        if (iti.isValidNumber()) {
            valid.value = 1;
            validMsg.classList.remove("hidden");
        } else {
            valid.value = 0;
            input.classList.add("error");
            var errorCode = iti.getValidationError();
            errorMsg.innerHTML = errorMap[errorCode];
            errorMsg.classList.remove("hidden");
        }
    }
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);
