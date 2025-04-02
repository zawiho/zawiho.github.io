const gallery=["dino.jpg","kitten.jpg","budbud.jpg","courage1.jpg","renew.jpg","greenleaf.jpg"];
const alt=["Ancient Avians JavaScript game","Kitten is Angry Music Video","Bud Bud Explainer Animation","Camp Courage Calgary Highlight Video #1","Renew Alberta Social Campaign Website","greenleaf eCommerce Prototype Website"];
const url=["dino.html","kitten.html","budbud.html","courage1.html","renewalberta.html","greenleaf.html"];

let show;
let fadingIn;
let fadingOut;

//Fade in and out

function fadeIn(){
    displayedImage.style.opacity=1;
}
function fadeOut(){
    displayedImage.style.opacity=0;
}

//Change number fetched from array to change displayedImage, alt and link
let i=0;
function autoImage(){
    if(i<gallery.length-1){
        i++;
    }
    else if(i==gallery.length-1){
        i=0;
    }

    displayedImage.src="images/"+gallery[i];
    displayedImage.alt=alt[i]+" by Bronwyn Howell";
    hyperlink.href=url[i];
    slideCaption.innerHTML="\""+alt[i]+"\"";
    // console.log(i);
    if(i==0){
        thumb1.style.filter="grayscale(0%)";
    }else{
        thumb1.style.filter="grayscale(100%)";
    }
    if(i==1){
        thumb2.style.filter="grayscale(0%)";
    }else{
        thumb2.style.filter="grayscale(100%)";
    }
    if(i==2){
        thumb3.style.filter="grayscale(0%)";
    }else{
        thumb3.style.filter="grayscale(100%)";
    }
    if(i==3){
        thumb4.style.filter="grayscale(0%)";
    }else{
        thumb4.style.filter="grayscale(100%)";
    }
    if(i==4){
        thumb5.style.filter="grayscale(0%)";
    }else{
        thumb5.style.filter="grayscale(100%)";
    }
    if(i==5){
        thumb6.style.filter="grayscale(0%)";
    }else{
        thumb6.style.filter="grayscale(100%)";
    }
}

function opacityDown(){
    fadingOut=setInterval(fadeOut,5000);
}
function delayImage(){
    show=setInterval(autoImage,5000);
}
function delayFadeIn(){
    fadingIn=setInterval(fadeIn,5000);
}
setTimeout(delayImage,500);
setTimeout(delayFadeIn,750);


//Mouse hover
slideshow.addEventListener('mouseover',function(){
    clearInterval(show);
    clearInterval(fadingIn);
    clearInterval(fadingOut);
    clearTimeout(delayImage);
    clearTimeout(delayFadeIn);
    displayedImage.style.opacity=1;
    slideCaption.classList.remove('hidden');
})
slideshow.addEventListener('mouseout',function(){
    opacityDown();
    setTimeout(delayImage,500);
    setTimeout(delayFadeIn,750);
    slideCaption.classList.add('hidden');
})

opacityDown();

//Thumbnails
thumb1.addEventListener('mouseover', function(){
    thumb1.style.filter="grayscale(0%) drop-shadow(0 0 8px var(--lilac))";
    thumb2.style.filter="grayscale(100%)";
    thumb3.style.filter="grayscale(100%)";
    thumb4.style.filter="grayscale(100%)";
    thumb5.style.filter="grayscale(100%)";
    thumb6.style.filter="grayscale(100%)";
    clearInterval(show);
    clearInterval(fadingIn);
    clearInterval(fadingOut);
    clearTimeout(delayImage);
    clearTimeout(delayFadeIn);
    displayedImage.style.opacity=1;
    displayedImage.src="images/dino.jpg";
    displayedImage.alt="Ancient Avians JavaScript game by Bronwyn Howell";
    hyperlink.href="dino.html";
    slideCaption.innerHTML="\"Ancient Avians JavaScript game\"";
})
thumb1.addEventListener('mouseout', function(){
    thumb1.style.filter="grayscale(100%)";
})
thumb2.addEventListener('mouseover', function(){
    thumb1.style.filter="grayscale(100%)";
    thumb2.style.filter="grayscale(0%) drop-shadow(0 0 8px var(--lilac))";
    thumb3.style.filter="grayscale(100%)";
    thumb4.style.filter="grayscale(100%)";
    thumb5.style.filter="grayscale(100%)";
    thumb6.style.filter="grayscale(100%)";
    clearInterval(show);
    clearInterval(fadingIn);
    clearInterval(fadingOut);
    clearTimeout(delayImage);
    clearTimeout(delayFadeIn);
    displayedImage.style.opacity=1;
    displayedImage.src="images/kitten.jpg";
    displayedImage.alt="Kitten is Angry Music Video by Bronwyn Howell";
    hyperlink.href="kitten.html";
    slideCaption.innerHTML="\"Kitten is Angry Music Video\"";
})
thumb2.addEventListener('mouseout', function(){
    thumb2.style.filter="grayscale(100%)";
})
thumb3.addEventListener('mouseover', function(){
    thumb1.style.filter="grayscale(100%)";
    thumb2.style.filter="grayscale(100%)";
    thumb3.style.filter="grayscale(0%) drop-shadow(0 0 8px var(--lilac))";
    thumb4.style.filter="grayscale(100%)";
    thumb5.style.filter="grayscale(100%)";
    thumb6.style.filter="grayscale(100%)";
    clearInterval(show);
    clearInterval(fadingIn);
    clearInterval(fadingOut);
    clearTimeout(delayImage);
    clearTimeout(delayFadeIn);
    displayedImage.style.opacity=1;
    displayedImage.src="images/budbud.jpg";
    displayedImage.alt="Bud bud Explainer Animation by Bronwyn Howell";
    hyperlink.href="budbud.html";
    slideCaption.innerHTML="\"Bud Bud Explainer Animation\"";
})
thumb3.addEventListener('mouseout', function(){
    thumb3.style.filter="grayscale(100%)";
})
thumb4.addEventListener('mouseover', function(){
    thumb1.style.filter="grayscale(100%)";
    thumb2.style.filter="grayscale(100%)";
    thumb3.style.filter="grayscale(100%)";
    thumb4.style.filter="grayscale(0%) drop-shadow(0 0 8px var(--lilac))";
    thumb5.style.filter="grayscale(100%)";
    thumb6.style.filter="grayscale(100%)";
    clearInterval(show);
    clearInterval(fadingIn);
    clearInterval(fadingOut);
    clearTimeout(delayImage);
    clearTimeout(delayFadeIn);
    displayedImage.style.opacity=1;
    displayedImage.src="images/courage1.jpg";
    displayedImage.alt="Camp Courage Calgary Highlight Video #1 by Bronwyn Howell";
    hyperlink.href="courage1.html";
    slideCaption.innerHTML="\"Camp Courage Calgary Highlight Video #1\"";
})
thumb4.addEventListener('mouseout', function(){
    thumb4.style.filter="grayscale(100%)";
})
thumb5.addEventListener('mouseover', function(){
    thumb1.style.filter="grayscale(100%)";
    thumb2.style.filter="grayscale(100%)";
    thumb3.style.filter="grayscale(100%)";
    thumb4.style.filter="grayscale(100%)";
    thumb5.style.filter="grayscale(0%) drop-shadow(0 0 8px var(--lilac))";
    thumb6.style.filter="grayscale(100%)";
    clearInterval(show);
    clearInterval(fadingIn);
    clearInterval(fadingOut);
    clearTimeout(delayImage);
    clearTimeout(delayFadeIn);
    displayedImage.style.opacity=1;
    displayedImage.src="images/renew.jpg";
    displayedImage.alt="Renew Alberta Social Campaign Website by Bronwyn Howell";
    hyperlink.href="renew.html";
    slideCaption.innerHTML="\"Renew Alberta Social Campaign Website\"";
})
thumb5.addEventListener('mouseout', function(){
    thumb5.style.filter="grayscale(100%)";
})
thumb6.addEventListener('mouseover', function(){
    thumb1.style.filter="grayscale(100%)";
    thumb2.style.filter="grayscale(100%)";
    thumb3.style.filter="grayscale(100%)";
    thumb4.style.filter="grayscale(100%)";
    thumb5.style.filter="grayscale(100%)";
    thumb6.style.filter="grayscale(0%) drop-shadow(0 0 8px var(--lilac))";
    clearInterval(show);
    clearInterval(fadingIn);
    clearInterval(fadingOut);
    clearTimeout(delayImage);
    clearTimeout(delayFadeIn);
    displayedImage.style.opacity=1;
    displayedImage.src="images/greenleaf.jpg";
    displayedImage.alt="greenleaf eCommerce Prototype Website by Bronwyn Howell";
    hyperlink.href="greenleaf.html";
    slideCaption.innerHTML="\"greenleaf eCommerce Prototype Website\"";
})
thumb6.addEventListener('mouseout', function(){
    thumb6.style.filter="grayscale(100%)";
})





//============================================

// const gallery=["dino.jpg","kitten.jpg","winds.jpg","courage1.jpg","renew.jpg","greenleaf.jpg"];
// const alt=["Ancient Avians JavaScript game","Kitten is Angry Music Video","Spirit Winds Ranch WordPress Website","Camp Courage Calgary Highlight Video #1","Renew Alberta Social Campaign Website","greenleaf eCommerce Prototype Website"];
// const url=["dino.php","kitten.php","spiritwinds.php","courage1.php","renewalberta.php","greenleaf.php"];

// let showInterval;
// let fadeInInterval;
// let fadeOutInterval;

// //Fade in and out

// function fadeIn(){
//     displayedImage.style.opacity=1;
// }

// function fadeOut(){
//     displayedImage.style.opacity=0;
// }

// //Change number fetched from array to change displayedImage, alt and link
// let i=0;

// function autoImage(){
//     if(i<gallery.length-1){
//         i++;
//     }
//     else if(i==gallery.length-1){
//         i=0;
//     }

//     displayedImage.src="images/"+gallery[i];
//     displayedImage.alt=alt[i]+" by Zachary Howell";
//     hyperlink.href=url[i];
//     slideCaption.innerHTML="\""+alt[i]+"\"";
// }

// // Flag variable to keep track of whether the image is being hovered over or not
// let isHovering = false;
// let delayImageTimeout;
// let delayFadeInTimeout;

// function opacityDown(){
//     // Start the fadeOut interval only if the image is not being hovered over
//     if (!isHovering) {
//         fadeOutInterval = setInterval(fadeOut, 5000);
//     }
// }

// function delayImage(){
//     // Start the show interval only if the image is not being hovered over
//     if (!isHovering) {
//         showInterval = setInterval(autoImage, 5000);
//     }
// }

// function delayFadeIn(){
//     // Start the fadeIn interval only if the image is not being hovered over
//     if (!isHovering) {
//         fadeInInterval = setInterval(fadeIn, 5000);
//     }
// }

// setTimeout(delayImage, 500);
// setTimeout(delayFadeIn, 750);

// //Mouse hover
// displayedImage.addEventListener('mouseover', function() {
//     isHovering = true; // Set the flag variable to true
//     clearInterval(showInterval);
//     clearInterval(fadeInInterval);
//     clearInterval(fadeOutInterval);
//     clearTimeout(delayImageTimeout);
//     clearTimeout(delayFadeInTimeout);
//     displayedImage.style.opacity = 1;
//     slideCaption.classList.remove('hidden');
// });

// displayedImage.addEventListener('mouseout', function() {
//     isHovering = false; // Set the flag variable to false
//     fadeOutInterval = setInterval(fadeOut, 5000);
//     delayImageTimeout = setTimeout(delayImage, 500);
//     delayFadeInTimeout = setTimeout(delayFadeIn, 750);
//     slideCaption.classList.add('hidden');
// });

// opacityDown();