const pre_btn=document.querySelector("#pre-btn");
const next_btn=document.querySelector("#next-btn");
const main_slide_img=document.querySelector(".main-slide-img");
const image=document.querySelectorAll(".main-slide-img img");
const size=image[0].clientWidth;
var check=true;
var count=1;
main_slide_img.style.transform="translateX("+(-size*count)+"px)";

pre_btn.addEventListener('click',function(){
    if(check==false){
        return;
    }
    check=false;
    main_slide_img.style.transition="transform 0.4s ease-in-out";
    count--;
    main_slide_img.style.transform="translateX("+(-size*count)+"px)";
})
next_btn.addEventListener('click',function(){
    if(check==false){
        return;
    }
    main_slide_img.style.transition="transform 0.4s ease-in-out";
    count++;
    check=false;
    main_slide_img.style.transform="translateX("+(-size*count)+"px)";
})
main_slide_img.addEventListener('transitionend',function(){
    if(image[count].id=="last-img"){
        main_slide_img.style.transition="none";
        count=image.length-2;
        main_slide_img.style.transform="translateX("+(-size*count)+"px)";
    }else if(image[count].id=="first-img"){
        main_slide_img.style.transition="none";
        count=1;
        main_slide_img.style.transform="translateX("+(-size*count)+"px)"
    }
    check=true;
})
setInterval(automove,3000);
function automove()
{
    if(check==false){
        return;
    }
    main_slide_img.style.transition="transform 0.4s ease-in-out";
    count++;
    check=false;
    main_slide_img.style.transform="translateX("+(-size*count)+"px)";
}

const main_sukien_left_btn=document.querySelector("#main-sukien-left-btn");
const main_sukien_right_btn=document.querySelector("#main-sukien-right-btn");
const main_sukien_slide=document.querySelector(".main-sukien-slide");
const main_sukien_img=document.querySelectorAll(".main-sukien-slide img");
const sizeskien=main_sukien_img[0].clientWidth;
var checkskien=true;
var countskien=1;
main_sukien_slide.style.transform="translateX("+(-sizeskien*countskien)+"px)";
main_sukien_left_btn.addEventListener('click',function(){
    if(checkskien==false){
        return;
    }
    main_sukien_slide.style.transition="transform 0.5s ease-in-out"
    countskien--;
    checkskien=false;
    main_sukien_slide.style.transform="translateX("+(-sizeskien*countskien)+"px)";
})
main_sukien_right_btn.addEventListener('click',function(){
    if(checkskien==false){
        return;
    }
    main_sukien_slide.style.transition="transform 0.5s ease-in-out"
    countskien++;
    checkskien=false;
    main_sukien_slide.style.transform="translateX("+(-sizeskien*countskien)+"px)";
})
main_sukien_slide.addEventListener('transitionend',function(){
    if(main_sukien_img[countskien].id=="skien-last"){
        main_sukien_slide.style.transition="none";
        countskien=main_sukien_img.length-2;
        main_sukien_slide.style.transform="translateX("+(-sizeskien*countskien)+"px)";
    }else if(main_sukien_img[countskien].id=="skien-first"){
        main_sukien_slide.style.transition="none";
        countskien=1;
        main_sukien_slide.style.transform="translateX("+(-sizeskien*countskien)+"px)";
    }
    checkskien=true;
})
setInterval(main_sukien_slide_automove,6000);
function main_sukien_slide_automove(){
    if(checkskien==false){
        return;
    }
    main_sukien_slide.style.transition="transform 0.5s ease-in-out"
    countskien++;
    checkskien=false;
    main_sukien_slide.style.transform="translateX("+(-sizeskien*countskien)+"px)";
}