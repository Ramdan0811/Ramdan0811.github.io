function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

function myFunction1() {
    var x = document.getElementById ("product");
    if (x.style.display == 'none'){
        x.style.display = "flex";
    }else{
        x.style.display = "none";
    }
        
}

alert("Selamat datang")

const tAcakWarna = document.createElement("button");
const teskTombol = document.createTextNode("Acak Warna");
tAcakWarna.appendChild(teskTombol);
tAcakWarna.setAttribute("type","button");
tUbahWarna.after(tAcakWarna);

tAcakWarna.addEventListener("click",function(){
    const r = Math.round(Math.random() * 255 + 1);
    const g = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);
    document.body.style.backgroundColor = "rgb("+ r +","+ g +","+ b +")";
});
