document.addEventListener("DOMContentLoaded", function () {

    const coffeeChoice = document.getElementById("coffee-choice");
    const strength = document.getElementById("strength");
    const methodButtons = document.querySelectorAll(".brew-method");

    const recipeCoffee = document.getElementById("recipe-coffee");
    const recipeMethod = document.getElementById("recipe-method");
    const recipeCoffeeGrams = document.getElementById("recipe-coffee-grams");
    const recipeWater = document.getElementById("recipe-water");
    const recipeTemperature = document.getElementById("recipe-temperature");
    const recipeTime = document.getElementById("recipe-time");

    const startButton = document.getElementById("start-brew");
    const brewMessage = document.getElementById("brew-message");

    if (
        !coffeeChoice ||
        !strength ||
        !recipeCoffee
    ) {
        return;
    }

    let selectedMethod = "pour-over";

    const coffeeData = {

        ethiopian: {
            name: "Ethiopian Sunrise",
            baseTemperature: 94
        },

        colombian: {
            name: "Colombian Reserve",
            baseTemperature: 93
        },

        brazilian: {
            name: "Brazilian Dark Roast",
            baseTemperature: 92
        }

    };

    const methodData = {

        "pour-over": {
            name: "Pour Over",
            water: 300,
            time: "3:00"
        },

        "french-press": {
            name: "French Press",
            water: 350,
            time: "4:00"
        },

        espresso: {
            name: "Espresso",
            water: 40,
            time: "0:30"
        }

    };


    function updateRecipe() {

        const coffee = coffeeData[coffeeChoice.value];
        const method = methodData[selectedMethod];

        const strengthValue = Number(strength.value);

        let coffeeGrams = 20;

        if (strengthValue === 1) {
            coffeeGrams = 18;
        }

        if (strengthValue === 3) {
            coffeeGrams = 23;
        }

        recipeCoffee.textContent = coffee.name;

        recipeMethod.textContent = method.name;

        recipeCoffeeGrams.textContent =
            coffeeGrams + " g";

        recipeWater.textContent =
            method.water + " ml";

        recipeTemperature.textContent =
            coffee.baseTemperature + "°C";

        recipeTime.textContent =
            method.time;

    }


    methodButtons.forEach(function (button) {

        button.addEventListener("click", function () {

            methodButtons.forEach(function (item) {
                item.classList.remove("active");
            });

            this.classList.add("active");

            selectedMethod = this.dataset.method;

            updateRecipe();

        });

    });


    coffeeChoice.addEventListener(
        "change",
        updateRecipe
    );


    strength.addEventListener(
        "input",
        updateRecipe
    );


    startButton.addEventListener(
        "click",
        function () {

            brewMessage.textContent =
                "Your brew is ready to begin. Enjoy your coffee! ☕";

        }
    );


    updateRecipe();

});