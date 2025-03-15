function h2Start(){
    hello.style.fontSize=0;
}
function h2Up(){
    if (navigator.userAgent.match(/Android/i)
         || navigator.userAgent.match(/webOS/i)
         || navigator.userAgent.match(/iPhone/i)
         || navigator.userAgent.match(/iPad/i)
         || navigator.userAgent.match(/iPod/i)
         || navigator.userAgent.match(/BlackBerry/i)
         || navigator.userAgent.match(/Windows Phone/i)) {
            hello.style.fontSize="19vw";
         }else{
             hello.style.fontSize="12rem";
         }
}
function h2Settle(){
    if (navigator.userAgent.match(/Android/i)
         || navigator.userAgent.match(/webOS/i)
         || navigator.userAgent.match(/iPhone/i)
         || navigator.userAgent.match(/iPad/i)
         || navigator.userAgent.match(/iPod/i)
         || navigator.userAgent.match(/BlackBerry/i)
         || navigator.userAgent.match(/Windows Phone/i)) {
            hello.style.fontSize="16vw";
         }else{
             hello.style.fontSize="10rem";
         }
}
(function h2Pop(){
    h2Start();
    setTimeout(h2Up,500);
    setTimeout(h2Settle,700);
})();
function h2Right(){
    hello.style.left="15px";
}
function h2Left(){
    hello.style.left=0;
}
(function h2Bump(){
    setTimeout(h2Right, 1750);
    setTimeout(h2Left, 1800);
})();


// function imgOpa(){
//     helloImg.style.opacity=1;
// }
// (function imgFade(){
//     setTimeout(imgOpa,1000);
// })();

function imgRotate(){
    helloImg.style.transform="rotate(735deg)";
    helloImg.style.left="20px";
}
function imgBack(){
    helloImg.style.transform="rotate(720deg)";
    helloImg.style.left="0";
}
(function imgIn(){
    setTimeout(imgRotate,750);
    setTimeout(imgBack, 1750);
})();

function pOpa(){
    helloP.style.opacity=1;
}
(function pFade(){
    setTimeout(pOpa,1800);
})();

function removeHidden(){
    if (navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {
        document.querySelector('#homeNav').classList.remove("hidden");
        document.querySelector('#clients').classList.remove("hidden");
    }else{
        document.querySelector('#homeNav').classList.remove("hidden");
        document.querySelector('#clients').classList.remove("hidden");
        document.querySelector('#featured').classList.remove("hidden");
    }
}

setTimeout(removeHidden,4000);

var myText='Here\'s what I can do...';
var myArray=myText.split("");
var loopTimer;
function frameLooper(){
    if(myArray.length>0){
        document.getElementById("skillsH3").innerHTML+=myArray.shift();
    }else{
        clearTimeout(loopTimer);
        return false;
    }
    loopTimer=setTimeout('frameLooper()',50);
}
setTimeout(frameLooper, 2500);

function revealFirst(){
    first.style.opacity=1;
}
function secondOpa(){
    secondLink.style.opacity=1;
}
function revealSecond(){
    second.style.opacity=1;
}
function rightBorder(){
    second.style.borderRight="2px solid var(--moss)";
}
function bottomBorder(){
    second.style.borderBottom="2px solid var(--moss)";
}
function revealThird(){
    third.style.opacity=1;
}
function revealClients(){
    clientsH3.style.opacity=1;
}
function revealFire(){
    fireDept.style.opacity=1;
}
function revealWinds(){
    spiritWinds.style.opacity=1;
}
function revealHive(){
    hiveYYC.style.opacity=1;
}

function nail1(){
    thumb1.style.opacity=1;
}
function nail2(){
    thumb2.style.opacity=1;
}
function nail3(){
    thumb3.style.opacity=1;
}
function nail4(){
    thumb4.style.opacity=1;
}
function nail5(){
    thumb5.style.opacity=1;
}
function nail6(){
    thumb6.style.opacity=1;
}
function showSlides(){
    document.querySelector('#slideshow').style.opacity=1;
}
if (navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {
        setTimeout(revealFirst,4050);
        setTimeout(revealSecond,4550);
        setTimeout(secondOpa,5050);
        setTimeout(bottomBorder,5550)
        setTimeout(revealThird,6050);
        
        setTimeout(revealClients,7050);

        setTimeout(revealWinds,8050);
        setTimeout(revealHive,8800);
        setTimeout(revealFire,9550)
}else{
    window.addEventListener("scroll", function(){
        var scrollPos=window.scrollY;
        var screenHeight = window.innerHeight;
        console.log(scrollPos+"px");
        console.log(screenHeight);

        if(scrollPos>=288){
            revealFirst();
            setTimeout(revealSecond,500);
            setTimeout(secondOpa,1000);
            setTimeout(rightBorder,1500);
            setTimeout(revealThird,2000);
        }
        if(scrollPos>=656){
            catNav.classList.remove("hidden");
            homeNav.style.opacity=0;
        }else if(scrollPos<656){
            catNav.classList.add("hidden");
            homeNav.style.opacity=1;
        }
        if(scrollPos>=544){
            revealClients();
        }
        if(scrollPos>=720){
            revealWinds();
            setTimeout(revealHive, 750);
            setTimeout(revealFire, 1500);
        }
        if(scrollPos>=1056){
            featuredH3.style.opacity=1;
        }
        if(scrollPos>=1234){

            nail1();
            setTimeout(nail2,250);
            setTimeout(nail3,500);
            setTimeout(nail4,750);
            setTimeout(nail5,1000);
            setTimeout(nail6,1250);
            this.setTimeout(showSlides, 2000)
        }
    })
}