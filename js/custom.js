var menuBtn=document.querySelector("#menuBar");menuBtn.addEventListener("click",()=>{menuBtn.classList.contains("opn")?(menuBtn.src="../assets/img/logos/Close-X.svg",menuBtn.classList.remove("opn"),document.querySelector(".links").style.left="0%"):(menuBtn.classList.add("opn"),menuBtn.classList.remove("cloz"),menuBtn.src="../assets/img/logos/Menu-bar.svg",document.querySelector(".links").style.left="-150%");var e=document.querySelector(".header");e.addEventListener("scroll",()=>{e.style.backgroundColor="red"})});var serviceBtn=document.querySelector(".categories"),opnclz=document.querySelector(".maga-menu"),ibtn=document.querySelector(".categories .imgScnd");serviceBtn.addEventListener("click",()=>{opnclz.classList.contains("maga-menu")?(opnclz.classList.add("opn-menu"),opnclz.classList.remove("maga-menu"),ibtn.src="./assets/img/icons/arrow-up.svg"):(opnclz.classList.remove("opn-menu"),opnclz.classList.add("maga-menu"),ibtn.src="./assets/img/icons/arrow-down.svg")});const items=document.querySelectorAll(".accordion button");function toggleAccordion(){let e=this.getAttribute("aria-expanded");for(i=0;i<items.length;i++)items[i].setAttribute("aria-expanded","false");"false"==e&&this.setAttribute("aria-expanded","true")}items.forEach(e=>e.addEventListener("click",toggleAccordion));const tabs=document.querySelectorAll("[data-tab-target]"),tabContents=document.querySelectorAll("[data-tab-content]");tabs.forEach(e=>{e.addEventListener("click",()=>{let t=document.querySelector(e.dataset.tabTarget);tabContents.forEach(e=>{e.classList.remove("active")}),tabs.forEach(e=>{e.classList.remove("active")}),e.classList.add("active"),t.classList.add("active")})});const carousel=document.querySelector(".carousel"),firstImg=carousel.querySelectorAll(".itm")[0],arrowIcons=document.querySelectorAll(".HomePagewrapper i");let isDragStart=!1,isDragging=!1,prevPageX,prevScrollLeft,positionDiff;const laptopScreen=window.matchMedia("(min-width: 1497px)"),miniLaptopScreen=window.matchMedia("(min-width:992px)"),tabletScreen=window.matchMedia("(min-width:768px)"),mobile=window.matchMedia("(max-width:767px)");laptopScreen.matches?arrowIcons.forEach(e=>{e.addEventListener("click",()=>{let t=(firstImg.clientWidth+14)*4;carousel.scrollLeft+="left"==e.id?-t:t,setTimeout(()=>showHideIcons(),60)})}):miniLaptopScreen.matches?arrowIcons.forEach(e=>{e.addEventListener("click",()=>{let t=(firstImg.clientWidth+14)*3;carousel.scrollLeft+="left"==e.id?-t:t,setTimeout(()=>showHideIcons(),60)})}):tabletScreen.matches?arrowIcons.forEach(e=>{e.addEventListener("click",()=>{let t=(firstImg.clientWidth+14)*2;carousel.scrollLeft+="left"==e.id?-t:t,setTimeout(()=>showHideIcons(),60)})}):mobile.matches&&arrowIcons.forEach(e=>{e.addEventListener("click",()=>{let t=firstImg.clientWidth+14;carousel.scrollLeft+="left"==e.id?-t:t,setTimeout(()=>showHideIcons(),60)})});const autoSlide=()=>{if(carousel.scrollLeft-(carousel.scrollWidth-carousel.clientWidth)>-1||carousel.scrollLeft<=0)return;positionDiff=Math.abs(positionDiff);let e=firstImg.clientWidth+14,t=e-positionDiff;if(carousel.scrollLeft>prevScrollLeft)return carousel.scrollLeft+=positionDiff>e/3?t:-positionDiff;carousel.scrollLeft-=positionDiff>e/3?t:-positionDiff},dragStart=e=>{isDragStart=!0,prevPageX=e.pageX||e.touches[0].pageX,prevScrollLeft=carousel.scrollLeft},dragging=e=>{isDragStart&&(e.preventDefault(),isDragging=!0,carousel.classList.add("dragging"),positionDiff=(e.pageX||e.touches[0].pageX)-prevPageX,carousel.scrollLeft=prevScrollLeft-positionDiff)},dragStop=()=>{isDragStart=!1,carousel.classList.remove("dragging"),isDragging&&(isDragging=!1,autoSlide())};carousel.addEventListener("mousedown",dragStart),carousel.addEventListener("touchstart",dragStart),document.addEventListener("mousemove",dragging),document.addEventListener("mouseup",dragStop),carousel.addEventListener("touchend",dragStop);

// home pricing section 
function disableNumberOfScreens(){
  let noOfScreens = document.getElementById('NoScreens');
  if (this.value === 'Select') {
    noOfScreens.disabled = true;
  } else {
    noOfScreens.disabled = false;
  }
}
function selectPrice(){
let projectType = document.getElementById("Projects").value;
let noOfScreens=0;
noOfScreens = document.getElementById("NoScreens").value;

let price=0;

let f_price=0;
switch (projectType) {
case "Web & Dashboard Design":
  if(noOfScreens==1){
    price = noOfScreens * WebDashboardDesign;
    break;
  }else if(noOfScreens>1){
    price = ((noOfScreens-1) * MulWebDashboardDesign)+WebDashboardDesign;
    break;
  }
  break;
case "Landing Page Design":
  if(noOfScreens==1){
    price = noOfScreens * LandingPageDesign;
    break;
  }
  else if(noOfScreens>1){
    price = ((noOfScreens -1)* MulLandingPageDesign)+LandingPageDesign;
    break;
  }
  break;
case "Mobile App Design":
  if(noOfScreens==1){
    price = noOfScreens * MobileAppDesign;
    break;
  }else if(noOfScreens>1){
    price = ((noOfScreens -1)*  MulMobileAppDesign)+MobileAppDesign;
    break;
  }
  break;
case "HTML & CSS":
  if(noOfScreens==1){
    price = noOfScreens * HTMlCSS;
    break;
  }
  else if(noOfScreens>1){
    price = ((noOfScreens -1)*  MulHTMlCSS)+MobileAppDesign;
    break;
  }
  break;
default:
  alert("Please select an option");
  console.log("price is",price);
}
console.log("price is",price);
document.getElementById("showPrice").innerHTML = "$" + price.toFixed(2);
document.getElementById("TotalPriceOfProject").value =price.toFixed(2);
}
//recaptcha
// function loadGoogleRecaptcha() {
//   var script = document.createElement('script');
//   script.src = "https://www.google.com/recaptcha/api.js";
//   script.async = true;
//   script.defer = true;
//   document.body.appendChild(script);
// }
// window.addEventListener('load', loadGoogleRecaptcha);
// document.addEventListener('touchstart', onTouchStart, {passive: true});
// element.addEventListener('wheel', onWheel, { passive: true });

     function onSubmit(token) {
            document.querySelector('form').submit();
        }