var phoneList = {
    "Samsung": 250.00,
    "iphone 15 pro max": 1300.00,
    "Motorola Razr 50": 599.99,
    "Google Pixel 9": 679.99,
    "Xiaomi Redmi Note 14": 299.99
};

function changeImage() {
    var image = document.getElementById("phoneImage");

    if (document.getElementById("Samsung").checked) {
        image.src = "image/samsung.png";
    } else if (document.getElementById("iphone 15 pro max").checked) {
        image.src = "image/iPhone.png";
    } else if (document.getElementById("Motorola Razr 50").checked) {
        image.src = "image/Motorola.png";
    } else if (document.getElementById("Google Pixel 9").checked) {
        image.src = "image/Pixel.png";
    } else if (document.getElementById("Xiaomi Redmi Note 14").checked) {
        image.src = "image/Xiaomi .png";
    }

    calculateTotal();
}

function calculateTotal() {
    var result = document.getElementById("totalPrice");
    var amount = parseInt(document.getElementById("kogus").value) || 0;
    var caseElement = document.getElementById("case");
    var hasCase = caseElement ? caseElement.checked : false;
    var price = 0;

    if (document.getElementById("Samsung").checked) {
        price = phoneList["Samsung"];
    } else if (document.getElementById("iphone 15 pro max").checked) {
        price = phoneList["iphone 15 pro max"];
    } else if (document.getElementById("Motorola Razr 50").checked) {
        price = phoneList["Motorola Razr 50"];
    } else if (document.getElementById("Google Pixel 9").checked) {
        price = phoneList["Google Pixel 9"];
    } else if (document.getElementById("Xiaomi Redmi Note 14").checked) {
        price = phoneList["Xiaomi Redmi Note 14"];
    }

    if (amount > 0 && price > 0) {
        var total = amount * price;
        if (hasCase) total += 10;
        result.innerHTML = total.toFixed(2) + "€";
    } else {
        result.innerHTML = "0.00€";
    }
}
