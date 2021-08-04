let inputs = document.getElementById("form").elements;
let targets = [];

for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].nodeName === "INPUT" && (inputs[i].type === "text" || inputs[i].type === "password" || inputs[i].type === "email")) {
        targets.push(inputs[i]);
    }
}

targets.forEach((target) => {
    target.addEventListener('mouseup', () => {
        target.parentElement.classList.add("focused");
    });

    target.addEventListener('focusout', (e) => {
        target.value.length <1 ? target.parentElement.classList.remove("focused") : true
    });
})

