 const prebutton=document.querySelector("#p-btn");
 const nextbutton=document.querySelector("#n-btn");
 const slide_image=document.querySelector(".slide-img");
 const image=document.querySelectorAll(".slide-img img");
const size=image[0].clientWidth;
var bool=true;
console.log(size);
var count=1;
slide_image.style.transform="translateX("+(-size*count)+"px)"; 
prebutton.addEventListener('click', function(){
    if(bool==false){
        return;
    }
    console.log('pre');
    bool=false;
    slide_image.style.transition="transform 0.4s ease-in-out";
    count--;
    slide_image.style.transform="translateX("+(-size*count)+"px)";
})
nextbutton.addEventListener('click',function(){
    if(bool==false){
        return;
    }
    console.log('next');
    slide_image.style.transition="transform 0.4s ease-in-out";
    count++;
    bool=false;
    slide_image.style.transform="translateX("+(-size*count)+"px)";
})
slide_image.addEventListener('transitionend',function(){
    if(image[count].id==="lastImage"){
        console.log('last');
        count=image.length-2;
        slide_image.style.transition="none";
        slide_image.style.transform="translateX("+(-size*count)+"px)";
    }else if(image[count].id==="firstImage"){
        count=1;
        slide_image.style.transition="none";
        slide_image.style.transform="translateX("+(-size*count)+"px)";
    }
    console.log('end');
    bool=true;
})
setInterval(automove2,3000);
function automove2()
{
    if(bool==false){
        return;
    }
    console.log('next');
    slide_image.style.transition="transform 0.4s ease-in-out";
    count++;
    bool=false;
    slide_image.style.transform="translateX("+(-size*count)+"px)";
}