const sua_btn = document.querySelectorAll(".sua-btn");
var modal = document.querySelectorAll(".modal");
const closeform_btn = document.querySelectorAll(".closeform-btn");
const edittruyenform = document.querySelectorAll(".edittruyen-form");
for (let i = 0; i < sua_btn.length; i++) {
    sua_btn[i].addEventListener('click', function () {
        modal[i].style.display = "block";
        edittruyenform[i].classList.remove("hideani");
        edittruyenform[i].classList.add("showani");
    })
    closeform_btn[i].addEventListener('click', function () {
        edittruyenform[i].classList.remove("showani");
        edittruyenform[i].classList.add("hideani");
    })
    window.onclick = function (event) {
        if (event.target == modal[i]) {
            edittruyenform[i].classList.remove("showani");
            edittruyenform[i].classList.add("hideani");
        }
    }
}
for (let i = 0; i < edittruyenform.length; i++) {
    edittruyenform[i].addEventListener('animationend', function () {
        console.log("hi");
        if (edittruyenform[i].classList.contains("hideani")){
            edittruyenform[i].classList.remove("hideani");
            modal[i].style.display = "none";
        }
    })

}