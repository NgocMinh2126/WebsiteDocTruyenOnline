const story1 = localStorage.getItem('story1');
document.querySelector("#h1-story-name").innerText += `${story1}` + " - Chapter1";
document.getElementById("a-story-name").innerText += `${story1}`;

var chter = document.getElementById("select-chapter");
for (let i = 0; i < chter.options.length; i++) {
    if (chter.options[i].selected == true) {
        /*HIỆN FILE txt TRUYỆN YETCNDT-C1*/
        const fileUrl = '/txt/Yeuemtucainhindautien-C1.txt' // provide file location
        fetch(fileUrl)
            .then(r => r.text())
            .then(t => document.getElementById("upload-story").textContent = t);

    }
    document.getElementById("select-chapter").addEventListener("change", function () {
        document.getElementById("h1-story-name").innerText = "Yêu em từ cái nhìn đầu tiên - Chapter 1";
        document.getElementById("upload-story").textContent = "";  //xóa dữ liệu chapter trước đã tải
        if (chter.options[i].selected == true) {
            if (chter.options[i].value == "1") {
                const fileUrl = '/txt/Yeuemtucainhindautien-C1.txt' // provide file location
                fetch(fileUrl)
                    .then(r => r.text())
                    .then(t => document.getElementById("upload-story").textContent = t);

            }
            else if (chter.options[i].value == "2") {
                document.getElementById("h1-story-name").innerText = "Yêu em từ cái nhìn đầu tiên - Chapter 2";
                document.getElementById("chapter").innerText = " Chapter 2";
                document.getElementById("upload-story").textContent = "";  //xóa dữ liệu chapter trước đã tải
                const fileUrl = '/txt/Yeuemtucainhindautien-C2.txt' // provide file location
                fetch(fileUrl)
                    .then(r => r.text())
                    .then(t => document.getElementById("upload-story").textContent = t);

            }
        }
    });
}

document.getElementById("btn-sau").addEventListener("click", function () {
    document.getElementById("btn-truoc").style.display = 'inline';
    document.getElementById("h1-story-name").innerText = "Yêu em từ cái nhìn đầu tiên - Chapter 2";
    document.getElementById("chapter").innerText = " Chapter 2";
    document.getElementById("upload-story").textContent = "";  //xóa dữ liệu chapter trước đã tải
    const fileUrl = '/txt/Yeuemtucainhindautien-C2.txt' // provide file location
    fetch(fileUrl)
        .then(r => r.text())
        .then(t => document.getElementById("upload-story").textContent = t);
});
document.getElementById("btn-truoc").addEventListener("click", function () {
    document.getElementById("btn-truoc").style.display = "none";
    document.getElementById("h1-story-name").innerText = "Yêu em từ cái nhìn đầu tiên - Chapter 1";
    document.getElementById("chapter").innerText = "Chapter 1";
    document.getElementById("upload-story").textContent = "";  //xóa dữ liệu chapter trước đã tải
    const fileUrl = '/txt/Yeuemtucainhindautien-C1.txt' // provide file location
    fetch(fileUrl)
        .then(r => r.text())
        .then(t => document.getElementById("upload-story").textContent = t);
});

window.onscroll = function () { myFunction() };
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}