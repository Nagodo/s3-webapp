const editForm = document.getElementById("editForm");
const editError = document.getElementById("errorMessage");

let items = [];
let editIndex = null;

document.addEventListener("DOMContentLoaded", () => {
    editError.textContent = "";

    let queryIndex = new URLSearchParams(window.location.search).get("index");
    editIndex = queryIndex;

    LoadItems();
});

editForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const formData = new FormData(editForm);

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
        editError.textContent = errorMessages.join(" ");
        return;
    }

    editError.textContent = "";

    EditItem(name, amount, editIndex);
});

function LoadItems() {
    const _items = localStorage.getItem("items");

    if (_items) {
        const parsedItems = JSON.parse(_items);
        items = parsedItems;
    }
    
    const currentName = document.getElementById("name");
    const currentAmount = document.getElementById("amount");

    currentName.value = items[editIndex].name;
    currentAmount.value = items[editIndex].amount;
}


function EditItem(name, amount, index) {

    const currentItem = {
        name: name,
        amount: amount
    };

    items[index] = currentItem;
    localStorage.setItem("items", JSON.stringify(items));

    window.location.href = "read.html";
}


