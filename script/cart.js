function selectqty(){
    let qty = document.getElementById('qty').value;
    console.log(qty);
    document.cookie = "qty =" +qty;
}
