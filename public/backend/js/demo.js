"use strict";

/*
// Table of content
// - Toasts / Live
// - Toasts / Placement
// - Forms
*/

(function ($, window) {
    /*
    // Toasts / Live
    */
    (function () {
        let counter = 0;

        $("#liveToastBtn").on("click", function () {
            const $toast = $("#liveToast").clone();

            if ($toast.length !== 1) {
                return;
            }

            $toast.find(".toast-body").text((++counter).toString());

            window.stroyka.toast.insert($toast).show();
        });
    })();

    /*
    // Toasts / Placement
    */
    (function () {
        const selectPlacement = document.getElementById("selectToastPlacement");

        if (!selectPlacement) {
            return;
        }

        selectPlacement.addEventListener("change", function () {
            const container = document.getElementById("toastPlacement");
            const previousClass = container.dataset.previousClass;

            if (previousClass) {
                container.classList.remove(...previousClass.split(" "));
            }

            if (this.value) {
                container.classList.add(...this.value.split(" "));
            }

            container.dataset.previousClass = this.value;
        });
    })();

    /*
    // Forms
    //
    // JavaScript for disabling form submissions if there are invalid fields
    */
    (function () {
        $(".needs-validation").on("submit", function (event) {
            if (!this.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            $(this).addClass("was-validated");
        });

        $(".needs-validation input").on("input", function () {
            $(this).removeClass("is-invalid");
            $(".invalid-feedback").remove();
        });
    })();

    /**
     * Alert Dismissal
     */
    (function () {
        setTimeout(() => {
            $(".alert-dismissible-aminate").removeClass("show", 500);
            $(".alert-dismissible-aminate").removeClass("fade", 100);
            $(".alert-dismissible-aminate").remove();
        }, 25000);
    })();
})(jQuery, window);
