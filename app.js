// ======> Preloader
window.addEventListener("load", function () {
    setTimeout(() => {
        document.querySelector(".preloader").style.display = "none";
    }, 3000)
});

// ======> Toggle menu
const toggle = document.getElementById('toogle');
const tbox = document.getElementById('tbox');
const nav = document.getElementById('nav-list');

const list1 = document.getElementById('list1');
const list2 = document.getElementById('list2');
const list3 = document.getElementById('list3');
const list4 = document.getElementById('list4');
const list5 = document.getElementById('list5');
const list6 = document.getElementById('list6');


tbox.onclick = () => {
    toggle.classList.toggle('active');
    nav.classList.toggle('active');
}


function removeActive() {
    toggle.classList.remove('active');
    nav.classList.remove('active');
}

list1.onclick = function(){
    removeActive();
}

list2.onclick = function(){
    removeActive();
}

list3.onclick = function(){
    removeActive();
}

list4.onclick = function(){
    removeActive();
}

list5.onclick = function(){
    removeActive();
}

list6.onclick = function(){
    removeActive();
}



// ======> Popup
const popup = document.querySelector('.popup');
const popClose = document.querySelector('.close');

window.onload = function () {
    setTimeout(function () {
        popup.style.display = "block";
    }, 10000)
}

popClose.addEventListener('click', () => {
    popup.style.display = "none";
})

// ======> Scroll top
const scrollBtn = document.querySelector('.scroll-btn');


window.addEventListener('scroll', () => {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        scrollBtn.style.display = 'block';
    }
    else {
        scrollBtn.style.display = 'none';
    }
})
scrollBtn.addEventListener('click', () => {
    window.scroll({
        top: 0,
        behavior: "smooth"
    })
})