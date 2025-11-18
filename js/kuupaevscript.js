function naitaKuupaevJaAeg() {
    const praegu = new Date();

    const kuupaev = praegu.toLocaleDateString();
    const kellaaeg = praegu.toLocaleTimeString();
    const kuupaevJaKellaaeg = praegu.toLocaleString();

    document.getElementById("kuupaev").textContent = "Kuupäev: " + kuupaev;
    document.getElementById("kellaaeg").textContent = "Kellaaeg: " + kellaaeg;
    document.getElementById("kuupaevJaKellaaeg").textContent = "Kuupäev ja kellaaeg: " + kuupaevJaKellaaeg;

    console.log("Kuupäev:", kuupaev);
    console.log("Kellaaeg:", kellaaeg);
    console.log("Kuupäev ja kellaaeg:", kuupaevJaKellaaeg);
}

function synnipaevaLoendur() {
    const tana = new Date();

    // Укажи дату своего дня рождения (месяцы считаются с 0: январь = 0, апрель = 3)
    const synna = new Date(tana.getFullYear(), 3, 17);

    if (tana > synna) {
        synna.setFullYear(tana.getFullYear() + 1);
    }

    const vahe = synna - tana;
    const paevad = Math.ceil(vahe / (1000 * 60 * 60 * 24));

    const tekstElement = document.getElementById("synnaTekst");

    if (paevad === 0) {
        tekstElement.textContent = "Palju õnne sünnipäevaks! 🎉🥳";


        const gif = document.createElement("img");
        gif.src = "https://i.pinimg.com/originals/31/a7/2a/31a72afda250825d993400c3ef28c55c.gif";
        gif.alt = "Sünnipäeva gif";
        gif.style.width = "250px";
        gif.style.marginTop = "20px";

        tekstElement.appendChild(gif);
    } else {
        tekstElement.textContent = `Sinu sünnipäevani on jäänud ${paevad} päeva`;
    }

    console.log(tekstElement.textContent);
}

document.getElementById("Taana").addEventListener("click", naitaKuupaevJaAeg);
document.getElementById("Synna").addEventListener("click", synnipaevaLoendur);
