
let percentage = () => {
    let actualPrice = document.getElementById("actualPrice").value;
    let offerPrice = document.getElementById('offerPrice').value;
    let discount = document.getElementById('discount');

   let calc =  (offerPrice - actualPrice / actualPrice ) * 100;
    return discount.innerHTML = `<b> ${calc}%</b>`;
}

percentage();
