<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Telefoni Kalkulaator</title>
    <script src="js/KalkulatorJS.js"></script>
    <link rel="stylesheet" href="style/kalkulatorstyle.css">
</head>
<body>

<table>
    <tr>
        <td colspan="2">
            <h1>Telefoni Tellimise Kalkulaator</h1>
        </td>
    </tr>
    <tr>
        <td>
            <h2>Vali telefoni:</h2>
            <input type="radio" id="Samsung" name="phone" onclick="changeImage()">
            <label for="Samsung">Samsung s10 - 250.00€</label><br>
            <input type="radio" id="iphone 15 pro max" name="phone" onclick="changeImage()">
            <label for="iphone 15 pro max">iPhone 15 Pro Max - 1300.00€</label><br>
            <input type="radio" id="Motorola Razr 50" name="phone" onclick="changeImage()">
            <label for="Motorola Razr 50">Motorola Razr 50 - 599.99€</label><br>
            <input type="radio" id="Google Pixel 9" name="phone" onclick="changeImage()">
            <label for="Google Pixel 9">Google Pixel 9 - 679.99€</label><br>
            <input type="radio" id="Xiaomi Redmi Note 14" name="phone" onclick="changeImage()">
            <label for="Xiaomi Redmi Note 14">Xiaomi Redmi Note 14 - 249.99€</label><br>
        </td>

        <td rowspan="2">
            <h2>Pilt:</h2>
            <img id="phoneImage" src="image/telefon.png" width="150" height="200">
        </td>
    </tr>

    <tr>
        <td>
            <h2>Kogus:</h2>
            <input type="number" id="kogus" min="1" value="1" oninput="calculateTotal()">

            <h2>Lisad:</h2>
            <input type="checkbox" id="case" onchange="calculateTotal()">
            <label for="case">telefoni ümbris - 10.00€</label>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <h2>Lõpphind:</h2>
            <p id="totalPrice">0.00€</p>
        </td>
    </tr>
</table>

</body>
</html>