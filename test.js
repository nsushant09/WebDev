let btnClick = document.querySelector("#btnClick");
let showField = document.querySelector("#showNameField");
let boolean = false;

btnClick.style.cursor = 'pointer';
btnClick.addEventListener('click', () => {
    boolean = !boolean;
    if (boolean) {
        showField.textContent = name;
    } else {
        showField.textContent = "";
    }
})