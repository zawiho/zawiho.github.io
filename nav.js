
function NavColorSwap(){
    document.querySelector('.nav-div2').style.backgroundColor="hsla(230, 8%, 14%, 90%)";
}

navPortfolio.addEventListener('mouseover',function(){
    portfolioNav.classList.remove("hidden");
    aboutNav.classList.add("hidden");
    porLink.classList.add("active-link");
    abtLink.classList.remove("active-link");
    document.querySelector('.nav-div2').style.backgroundColor="hsla(263, 34%, 73%, 60%)";
    setTimeout(NavColorSwap, 350);
})
navAbout.addEventListener('mouseover',function(){
    aboutNav.classList.remove("hidden");
    portfolioNav.classList.add("hidden");
    abtLink.classList.add("active-link");
    porLink.classList.remove("active-link");
    document.querySelector('.nav-div2').style.backgroundColor="hsla(263, 34%, 73%, 60%)";
    setTimeout(NavColorSwap, 350);
})

if (navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {

        document.querySelector('.toggle-nav').addEventListener('click', function(e){
            e.preventDefault();
            document.querySelector('#hamburger').classList.toggle("hidden");
            document.querySelector('#close').classList.toggle("hidden");
            document.querySelector('#navMob2').classList.toggle("hidden");
            document.querySelector('.prtMenu').classList.add("hidden");
            document.querySelector('#prtLink').style.textDecoration="none";
            document.querySelector('.aboMenu').classList.add("hidden");
            document.querySelector('#aboLink').style.textDecoration="none";
            document.querySelector('.socials').classList.remove("hidden");
        })
            
        document.querySelector('#prtLink').addEventListener('click',function(a){
            a.preventDefault();
            document.querySelector('#prtLink').style.textDecoration="underline 1px var(--moss)";
            document.querySelector('#prtLink').style.textUnderlineOffset="0.3rem";
            document.querySelector('.prtMenu').classList.remove("hidden");

            document.querySelector('#aboLink').style.textDecoration="none";
            document.querySelector('.aboMenu').classList.add("hidden");
            document.querySelector('.socials').classList.add("hidden");
        })

        document.querySelector('#aboLink').addEventListener('click',function(b){
            b.preventDefault();
            document.querySelector('#aboLink').style.textDecoration="underline 1px var(--moss)";
            document.querySelector('#aboLink').style.textUnderlineOffset="0.3rem";
            document.querySelector('.aboMenu').classList.remove("hidden");

            document.querySelector('#prtLink').style.textDecoration="none";
            document.querySelector('.prtMenu').classList.add("hidden");
            document.querySelector('.socials').classList.add("hidden");
        })

        document.querySelector('#bioLink').addEventListener('click',function(){
            document.querySelector('.aboMenu').classList.add("hidden");
        })
        document.querySelector('#wrkLink').addEventListener('click',function(){
            document.querySelector('.aboMenu').classList.add("hidden");
        })
        document.querySelector('#conLink').addEventListener('click',function(){
            document.querySelector('.aboMenu').classList.add("hidden");
        })
    }