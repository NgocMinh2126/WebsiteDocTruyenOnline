const sua_btn = document.querySelectorAll(".sua-btn");
const them_btn = document.querySelector(".them-btn");
var modal = document.querySelector(".modal");
var modaladd = document.querySelector(".modaladd");
const closeformedit_btn = document.querySelector("#close-formedit");
const closeformadd_btn=document.querySelector("#close-formadd");
const edittruyenform = document.querySelector(".edittruyen-form");
const addtruyenform = document.querySelector(".addtruyen-form");
for (let i = 0; i < sua_btn.length; i++) {
    sua_btn[i].addEventListener('click', function () {
        modal.style.display = "block";
        edittruyenform.classList.remove("hideani");
        edittruyenform.classList.add("showani");
    })    
}
closeformedit_btn.addEventListener('click', function () {
    console.log("dong");
    edittruyenform.classList.remove("showani");
    edittruyenform.classList.add("hideani"); 
    console.log("thoat thanh cong");
})
window.onclick = function (event) {
    if (event.target == modal) {
        edittruyenform.classList.remove("showani");
        edittruyenform.classList.add("hideani");  
        console.log("thoat thanh cong");
    }
}
edittruyenform.addEventListener('animationend', function () {
    if (edittruyenform.classList.contains("hideani")) {
        edittruyenform.classList.remove("hideani");
        modal.style.display = "none";
    }
})
//them
them_btn.addEventListener('click', function () {
    modaladd.style.display = "block";
    addtruyenform.classList.remove("hideani");
    addtruyenform.classList.add("showani");
})
closeformadd_btn.addEventListener('click', function () {
    addtruyenform.classList.remove("showani");
    addtruyenform.classList.add("hideani");
    console.log("hihi");
})
window.onclick = function (event) {
    if (event.target == modaladd) {
        addtruyenform.classList.remove("showani");
        addtruyenform.classList.add("hideani");
    }
}
addtruyenform.addEventListener('animationend', function () {
    if (addtruyenform.classList.contains("hideani")) {
        addtruyenform.classList.remove("hideani");
        modaladd.style.display = "none";
    }
})
