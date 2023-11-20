window.onload = () => {
    const FiltersForm = document.querySelector("#filters");
    const priceSlider = document.getElementById("myPriceRange");
    const priceOutput = document.getElementById("price");
    const yearOutput = document.getElementById("year");
    const yearSlider = document.getElementById("myYearRange");
    const kmSlider = document.getElementById("myKmRange");
    const kmOutput = document.getElementById("km");

    document.querySelectorAll("#filters input").forEach(input => {
        input.addEventListener('change', () => {
            // Retrieve data on click            
            const Form = new FormData(FiltersForm);
            priceOutput.innerHTML = priceSlider.value;
            yearOutput.innerHTML = yearSlider.value;
            kmOutput.innerHTML = kmSlider.value;
            // Create queryString
            const Params = new URLSearchParams();

            Form.forEach((value, key) => {
                Params.append(key, value);
                console.log(Params)
            });

            // Retrieve current URL
            const Url = new URL(window.location.href);

            // Ajax request
            fetch(Url.pathname + "?" + Params.toString() + "&ajax=1", {
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(response => response.json())
            .then(data => {
                const content = document.getElementById("content");
                content.innerHTML = data.content;
                history.pushState({}, null, Url.pathname + "?" + Params.toString());
            }).catch(e => console.log(e));
        })
    });
}