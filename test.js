let btnClick = document.querySelector("#btnClick");
let showField = document.querySelector("#showNameField");
let boolean = false;

btnClick.style.cursor = 'pointer';
btnClick.addEventListener('click', () => {
    boolean = !boolean;
    if (boolean) {
        showField.textContent = "Random String";
    } else {
        showField.textContent = "";
    }
})

btnClick.addEventListener('mouseover', ()=>{
    btnClick.textContent = "Hovered"
})
btnClick.addEventListener('mouseout', ()=>{
    btnClick.textContent = "Mouse out";
})

class Product{
    constructor(product_id, name, stock, price, description){
        this.product_id = product_id;
        this.name = name;
        this.stock = stock;
        this.price;
        this.description;
    }
}