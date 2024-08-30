$(document).ready(function () {
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function () {
        // Check if any required field is empty
        var isAnyRequiredFieldEmpty = false;
        $(this)
            .closest("fieldset")
            .find("input[required], select[required], textarea[required]")
            .each(function () {
                if ($(this).val().trim() === "") {
                    isAnyRequiredFieldEmpty = true;
                    return false; // Exit the loop
                }
            });

        // Get the error messages by class and ID
        var errorMessageElements = document.querySelectorAll(".errormessage");
        var phoneErrorMessage = document.getElementById("phone-error");
        var whatsappErrorMessage = document.getElementById(
            "whatsappnumberflag-error"
        );

        // Check if any required field is empty or if there are existing error messages
        if (isAnyRequiredFieldEmpty || document.querySelector(".error")) {
            // Remove any existing error messages
            const existingErrorMessages =
                document.querySelectorAll(".error-message");
            existingErrorMessages.forEach((message) => message.remove());

            // Display a general message if there are errors or empty required fields
            if (isAnyRequiredFieldEmpty) {
                // Get all required fields that are empty
                const emptyRequiredFields = document.querySelectorAll(
                    "[required]:empty, select[required]"
                );

                // Loop through each empty required field and display a message
                emptyRequiredFields.forEach((field) => {
                    const fieldName = field.name || field.id;
                    const formattedFieldName = fieldName
                        .split("_")
                        .map(
                            (word) =>
                                word.charAt(0).toUpperCase() + word.slice(1)
                        )
                        .join(" ");

                    // Check if the field is still empty after trimming whitespace
                    if (field.value.trim() === "") {
                        // Create a container for the error message
                        const errorContainer = document.createElement("div");
                        errorContainer.classList.add("error-container");

                        // Create the error message
                        const errorMessage = document.createElement("div");
                        errorMessage.classList.add("error-message");
                        errorMessage.textContent = `The field is required.`;
                        // errorMessage.textContent = `The field "${formattedFieldName}" is required.`;

                        // Append the error message to the container
                        errorContainer.appendChild(errorMessage);

                        // Append the container inside the input element
                        field.parentNode.insertBefore(
                            errorContainer,
                            field.nextSibling
                        );
                    }
                });

                // Add event listeners to required fields to hide error messages on input
                emptyRequiredFields.forEach((field) => {
                    field.addEventListener("input", () => {
                        const errorContainer = field.nextElementSibling;
                        if (
                            errorContainer &&
                            errorContainer.classList.contains("error-container")
                        ) {
                            errorContainer.remove();
                        }
                    });
                });
            } else {
                // Otherwise, display a general message
                const generalErrorMessage = document.createElement("div");
                generalErrorMessage.classList.add("error-message");
                generalErrorMessage.textContent =
                    "Please correct all errors before submitting.";
                document.querySelector("form").appendChild(generalErrorMessage);
            }

            return; // Prevent further execution
        }

        // Check for error messages
        var errorMessageFound = false;

        // Check for error messages by class
        errorMessageElements.forEach(function (element) {
            if (element.textContent.trim() !== "") {
                errorMessageFound = true;
                return;
            }
        });

        // Check for specific error messages by ID
        if (phoneErrorMessage && phoneErrorMessage.textContent.trim() !== "") {
            errorMessageFound = true;
        }

        if (
            whatsappErrorMessage &&
            whatsappErrorMessage.textContent.trim() !== ""
        ) {
            errorMessageFound = true;
        }

        if (errorMessageFound) {
            alert("Please correct all errors before submitting.");
            return; // Prevent further execution
        }

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li")
            .eq($("fieldset").index(next_fs))
            .addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative",
                    });
                    next_fs.css({ opacity: opacity });
                },
                duration: 500,
            }
        );
        setProgressBar(++current);
    });

    $(".previous").click(function () {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li")
            .eq($("fieldset").index(current_fs))
            .removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative",
                    });
                    previous_fs.css({ opacity: opacity });
                },
                duration: 500,
            }
        );
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%");
    }

    $(".submit").click(function () {
        return false;
    });
});
