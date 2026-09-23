const itemsContainer = document.getElementById("item-list");

let items = [];

document.addEventListener("DOMContentLoaded", () => {
    LoadItems();
    RenderItems();
});

function LoadItems() {
    items = localStorage.getItem("items");
    
    if (items) {
        items = JSON.parse(items);
    } else {
        items = [];
    }
}

function RenderItems() {
    const itemsContainer = document.getElementById("item-list");
    itemsContainer.innerHTML = "";

    items.forEach((item, index) => {
        RenderAddedItem(item, index);
    });
}

function RenderAddedItem(item, index) {
    const itemElement = document.createElement("li");
    itemElement.innerHTML = `
    <div class="item">
        <p class="name">Name: ${item.name}</p>
        <p class="amount">Amount: ${item.amount}</p>

        <div class="actions">
            <button class="edit-button">Edit</button>
            <button class="delete-button">Delete</button>
        </div>
    </div>
    `;

    itemElement.querySelector(".edit-button").addEventListener("click", () => {
        window.location.href = `edit.html?index=${index}`;
    });

    itemElement.querySelector(".delete-button").addEventListener("click", () => {
        const confirmDelete = confirm("Are you sure you want to delete this item?");
        if (confirmDelete) {
            items.splice(index, 1);
            localStorage.setItem("items", JSON.stringify(items));
            RenderItems();
        }
    });


    itemsContainer.appendChild(itemElement);
}