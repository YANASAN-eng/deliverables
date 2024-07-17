const hamburgerBtn = document.getElementById('hamburgerBtn');
const headerNavUILiAs = document.querySelectorAll('header nav ul li a');
const headerNavUI = document.querySelector('header nav ul');
const navWithIndent = document.querySelectorAll('.navWithIndent');

hamburgerBtn.addEventListener('click', toogleHamburgerMenu);
headerNavUILiAs.forEach(elem => elem.addEventListener('click', toogleHamburgerMenu));

navWithIndent.forEach(elem => elem.addEventListener('clcik', (event) => {
    elem.classList.toogle('open');
} ))

/*
ハンバーガーメニューの動作を決める処理
param: void
return: void
*/
function toogleHamburgerMenu()
{
    headerNavUI.classList.toggle('active');
    hamburgerBtn.classList.toggle('active');
}

/*
アコーディオンを開ける処理
param: element
param: int
return void
*/
function sideDown(el, duration = 300)
{
    el.classList.add('open');
    el.style.removeProperty('display');
    let display = window.getComputedStyle(el).display;
    if (display === 'none') {
        display = 'block';
    }
    el.style.display = display;
    let height = el.offsetHeight;
    el.style.overflow = "hidden";
    el.style.height = 0;
    el.style.paddingTop = 0;
    el.style.paddingBottom = 0;
    el.style.marginTop = 0;
    el.style.marginBottom = 0;
    el.offsetHeight;
    el.style.transitionProperty = "height, margin, padding";
    el.style.transitionDuration = duration + "ms";
    el.style.transitionTimingFunction = "ease";
    el.style.height = height + "px";
    el.style.removeProperty("padding-top");
    el.style.removeProperty("padding-bottom");
    el.style.removeProperty("margin-top");
    el.style.removeProperty("margin-bottom");
    setTimeout(() => {
        el.style.removeProperty('height');
        el.style.removeProperty('overflow');
        el.style.removeProperty('transition-duration');
        el.style.removeProperty('transition-property');
        el.style.removeProperty('transition-timing-function');
    }, duration);
};


/*
アコーディオンを閉じる処理
param: element
param: int
return void
*/
function slideUp(el, duration = 300)
{
    el.style.height = el.offsetHeight + "px";
    el.offsetHeight;
    el.style.transitionProperty = "height, margin, padding";
    el.style.transitionDuration = duration + "ms";
    el.style.transitionTimingFunction = "ease";
    el.style.overflow = "hidden";
    el.style.height = 0;
    el.style.paddingTop = 0;
    el.style.paddingBottom = 0;
    el.style.marginTop = 0;
    el.style.margtinBottom = 0;
    setTimeout(() => {
        el.style.sisplay = 'none';
        el.style.removeProperty('height');
        el.style.removeProperty('padding-top');
        el.style.removeProperty('padding-bottom');
        el.style.removeProperty('margin-top');
        el.style.removeProperty('margin-bottom');
        el.style.removeProperty('overflow');
        el.style.removeProperty('transition-duration');
        el.style.removeProperty('transition-property');
        el.style.removeProperty('transition-timing-function');
        el.classList.remove('open');
    }, duration);
};
