const createForm = document.getElementById("createForm");
const createError = document.getElementById("errorMessage");

const itemsContainer = document.getElementById("items");

const logo = document.getElementById("logo");

const sound = document.getElementById("sound");

let items = [];

document.addEventListener("DOMContentLoaded", () => {
    errorMessage.textContent = "";

    LoadItems();
});

createForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const formData = new FormData(createForm);

    let errorMessages = [];

    const name = formData.get("name");
    const amount = formData.get("amount");

    if (!name) {
        errorMessages.push("Name is required.");
    }

    if (!amount) {
        errorMessages.push("Amount is required.");
    }

    if (errorMessages.length > 0) {
        createError.textContent = errorMessages.join(" ");
        return;
    }

    createError.textContent = "";

    logo.classList.add("spin");
    sound.play();

    AddItem(name, amount);
});

function LoadItems() {
    items = localStorage.getItem("items");

    if (items) {
        items = JSON.parse(items);
    }
}


function AddItem(name, amount) {

    const item = {
        name: name,
        amount: amount
    };

    items.push(item);
    localStorage.setItem("items", JSON.stringify(items));

    RenderAddedItem(item);
}


function RenderAddedItem(item) {
    const itemElement = document.createElement("div");
    itemElement.innerHTML = `
        <h3>${item.name}</h3>
        <p>Amount: ${item.amount}</p>
    `;
    itemsContainer.appendChild(itemElement);
}