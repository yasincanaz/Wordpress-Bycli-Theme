ScrollReveal().reveal('.left',{
    delay:500,
    distance:"100px",
    origin:"left"
});
ScrollReveal().reveal(".right",{
    delay:500,
    distance:"100px",
    origin:"right"
});
ScrollReveal().reveal("#menu",{
    delay:500,
    distance:"100px",
    origin:"top"
});
ScrollReveal().reveal("#menu",{
    delay:500,
    distance:"100px",
    origin:"top"
});
ScrollReveal().reveal("#resim1",{
    delay:500,
    distance:"100px",
    origin:"top",
    scale:0.7
});
ScrollReveal().reveal("#cyclıst",{
    delay:500,
    distance:"100px",
    origin:"right"
});
window.addEventListener("scroll",()=>{
    var scrolled=window.scrollY;
    if(scrolled>10&&scrolled<600){
        document.querySelector("#resim1").style.top="42%";
        document.querySelector("#cyclıst").style.top="62%";
    }else{
        document.querySelector("#resim1").style.top="45%";
        document.querySelector("#cyclıst").style.top="65%";
    }
    if(scrolled>700&&scrolled<1100){
        document.querySelector("#resim2").style.marginLeft="70px";
    }else{
        document.querySelector("#resim2").style.marginLeft="0px";
    }
    if(scrolled>1500&&scrolled<2100){
        document.querySelector("#resim3").style.marginRight="50px";
    }else{
        document.querySelector("#resim3").style.marginRight="0px";
    }if(scrolled>2400&&scrolled<3100){
        document.querySelector("#resim4").style.transform="rotate(0deg)";
    }else{
        document.querySelector("#resim4").style.transform="rotate(-10deg)";
    }
});
document.querySelector("#wrapper-menu").addEventListener("click",function (){
    document.querySelector(".wrapper-menu").style.display="flex";
    document.querySelector("#wrapper-menu").style.opacity=0;
});
document.querySelector("#kapat").addEventListener("click",function (){
    document.querySelector(".wrapper-menu").style.display="none";
    document.querySelector("#wrapper-menu").style.opacity=1;
});
setInterval(function yukle(){
    document.querySelector(".loading-animation").style.display="none";
},1500);