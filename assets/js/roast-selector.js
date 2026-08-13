document.addEventListener("DOMContentLoaded", function () {

    const slider = document.getElementById("roast-slider");
    const profiles = document.querySelectorAll(".roast-profile");

    if (!slider || !profiles.length) {
        return;
    }

    slider.addEventListener("input", function () {

        const selectedRoast = this.value;

        profiles.forEach(function (profile) {
            profile.classList.remove("active");
        });

        const activeProfile = document.querySelector(
            `.roast-profile[data-roast="${selectedRoast}"]`
        );

        if (activeProfile) {
            activeProfile.classList.add("active");
        }

    });

});