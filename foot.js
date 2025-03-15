let isHovering = false;

function toTop(){
    zackToTop.style.opacity=1;
}
function hideTop(){
    if(!isHovering){
        zackToTop.style.opacity=0;
    }
}

document.querySelector('.footer-img').addEventListener('mouseover', function(){
    isHovering = true;
    setTimeout(toTop, 500);
})
document.querySelector('.footer-img').addEventListener('mouseout', function(){
    isHovering = false;
    hideTop();
})