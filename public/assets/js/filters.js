window.onload = () => {
    const FiltersForm = document.querySelector("#filters");
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    document.querySelectorAll("#filters input").forEach(input => {
        input.addEventListener('change', () => {
            // Retrieve data on click            
            const Form = new FormData(FiltersForm);
            output.innerHTML = slider.value;
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