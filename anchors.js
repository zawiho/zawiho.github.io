aboutLink.addEventListener("click",function(){
    event.preventDefault();
    window.scrollTo(0,0);
})
expLink.addEventListener("click", function(){
    event.preventDefault();
    window.scrollTo(0,640);
})
contactLink.addEventListener("click", function(){
    event.preventDefault();
    window.scrollTo(0, 1392);
})

// window.addEventListener("scroll", function(){
//     var scrollPos=window.scrollY;
//     console.log(scrollPos+"px");
// })