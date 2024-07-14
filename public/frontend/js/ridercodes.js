$(document).ready(function () {
    var current_fs, next_fs, previous_fs; // fieldsets
    var opacity;
    var current = 3;
    var steps = $("fieldset").length;

    setProgressBar(current);

    // Hide all fieldsets except the first one
    $("fieldset").hide();
    $("fieldset").first().show();

    $(".next").click(function () {
        // Show spinner
        var $button = $(this);
        $button.prop("disabled", true);
        $button.find(".spinner-border").show();

        // Simulate a delay for the loading spinner
        setTimeout(function () {
            // Check if any required field is empty in the current fieldset
            var isAnyRequiredFieldEmpty = false;
            $button
                .closest("fieldset")
                .find("input[required], select[required], textarea[required]")
                .each(function () {
                    if ($(this).val().trim() === "") {
                        isAnyRequiredFieldEmpty = true;
                        const fieldName = $(this).attr("name") || $(this).attr("id");
                        const formattedFieldName = fieldName
                            .split("_")
                            .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
                            .join(" ");
                        const errorContainer = $("<div class='error-container'></div>");
                        const errorMessage = $("<div class='error-message'></div>").text(`The field is required.`);
                        errorContainer.append(errorMessage);
                        $(this).next(".error-container").remove();
                        $(this).after(errorContainer);
                        console.log(`Error: The field '${formattedFieldName}' is required.`);
                    }
                });

            if (isAnyRequiredFieldEmpty) {
                // Add event listeners to required fields to hide error messages on input
                $("input[required], select[required], textarea[required]").on("input", function () {
                    $(this).next(".error-container").remove();
                });
                // Hide spinner and re-enable button
                $button.prop("disabled", false);
                $button.find(".spinner-border").hide();
                return; // Prevent further execution
            }

            // Check for error messages in the current fieldset
            var errorMessageFound = false;
            $button.closest("fieldset").find(".error-message").each(function () {
                if ($(this).text().trim() !== "") {
                    errorMessageFound = true;
                    console.log(`Error: ${$(this).text().trim()}`);
                }
            });

            if (errorMessageFound) {
                console.log("Please correct all errors before submitting.");
                // Hide spinner and re-enable button
                $button.prop("disabled", false);
                $button.find(".spinner-border").hide();
                return; // Prevent further execution
            }

            current_fs = $button.closest("fieldset");
            next_fs = $button.closest("fieldset").next();

            // Update step indicator
            updateStepIndicator(current, current + 1);

            // Show the next fieldset
            next_fs.show();
            // Hide the current fieldset with style
            current_fs.animate(
                { opacity: 0 },
                {
                    step: function (now) {
                        // For making fieldset appear animation
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

            // Hide spinner and re-enable button after animation
            setTimeout(function () {
                $button.prop("disabled", false);
                $button.find(".spinner-border").hide();
            }, 500);
        }, 1000); // Simulate a delay of 1 second for demonstration purposes
    });

    $(".previous").click(function () {
        current_fs = $(this).closest("fieldset");
        previous_fs = $(this).closest("fieldset").prev();

        // Clear all error messages and remove error classes when going back to the previous step
        current_fs.find(".error-message").remove();
        current_fs.find(".error").removeClass("error");

        // Update step indicator
        updateStepIndicator(current, current - 1);

        // Show the previous fieldset
        previous_fs.show();

        // Hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    // For making fieldset appear animation
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

    function updateStepIndicator(oldStep, newStep) {
        // Remove the active class from the current step
        $(".step").eq(oldStep - 1).removeClass("active");
        // Add the active class to the new step
        $(".step").eq(newStep - 1).addClass("active");

        // Update the step circle and text colors
        $(".step").eq(oldStep - 1).find("span").removeClass("bg-[#e0b228]").addClass("bg-White-c").removeClass("text-White-c").addClass("text-Black-c");
        $(".step").eq(oldStep - 1).find("a").removeClass("bg-[#e0b228]").removeClass("text-White-c").addClass("text-White-c");

        $(".step").eq(newStep - 1).find("span").removeClass("bg-White-c").addClass("bg-[#e0b228]").removeClass("text-Black-c").addClass("text-White-c");
        $(".step").eq(newStep - 1).find("a").addClass("bg-[#e0b228]").removeClass("text-Black-c").addClass("text-White-c").addClass("rounded-md").addClass("p-2").addClass("text-White-c");
    }

    $(".submit").click(function () {
        return false;
    });
});
