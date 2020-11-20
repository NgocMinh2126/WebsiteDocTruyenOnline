const Xemthem_btn=document.querySelector("#summary-xemthem-btn");
var noidung=document.querySelector(".main-summary-noidung");
Xemthem_btn.addEventListener('click',function(){
    if(noidung.classList.contains("main-summary-noidung-more")==true){
        Xemthem_btn.innerHTML=`Xem thêm <i class="fas fa-chevron-down"></i>`;        
        noidung.classList.remove("main-summary-noidung-more");
    }else{
        Xemthem_btn.innerHTML=`Thu gọn <i class="fas fa-chevron-up"></i>`;
        noidung.classList.add("main-summary-noidung-more");
    }
})
const container=document.querySelector(".main-morong-chuong-container");
const sapxepchuong_btn=document.querySelector(".sapxepchuong-btn");
sapxepchuong_btn.addEventListener('click',function(){
    var listchuong=document.querySelectorAll(".main-morong-chuong");
    for(let i=0;i<listchuong.length;i++){
        container.removeChild(listchuong[i]);
        console.log(i);
    }
    for(let i=listchuong.length-1;i>=0;i--){
        container.appendChild(listchuong[i]);
    }
})