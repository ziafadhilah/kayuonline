$w(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
})

$(function () {
    $('scroll').click(function () {
        $('html, body').animate({
            scrollTop: $('.thetop').offset().top
        }, "1000");
        return false;
    })
})


// scroll

var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});


// js spinner 
var inc = document.getElementsByClassName("stepper");
for (i = 0; i < inc.length; i++) {
    var incI = inc[i].querySelector("input"),
        id = incI.getAttribute("id"),
        min = incI.getAttribute("min"),
        max = incI.getAttribute("max"),
        step = incI.getAttribute("step");
    document
        .getElementById(id)
        .previousElementSibling.setAttribute(
            "onclick",
            "stepperInput('" + id + "', -" + step + ", " + min + ")"
        );
    document
        .getElementById(id)
        .nextElementSibling.setAttribute(
            "onclick",
            "stepperInput('" + id + "', " + step + ", " + max + ")"
        );
}

function stepperInput(id, s, m) {
    var el = document.getElementById(id);
    if (s > 0) {
        if (parseInt(el.value) < m) {
            el.value = parseInt(el.value) + s;
        }
    } else {
        if (parseInt(el.value) > m) {
            el.value = parseInt(el.value) + s;
        }
    }
}


// corousel
const controls = document.querySelector(".controls");
const container = document.querySelector(".thumbnail-container");
const allBox = container.children;
const containerWidth = container.offsetWidth;
const margin = 30;
var items = 0;
var totalItems = 0;
var jumpSlideWidth = 0;


// item setup per slide

responsive = [
    { breakPoint: { width: 0, item: 1 } }, //if width greater than 0 (1 item will show) 
    { breakPoint: { width: 600, item: 2 } }, //if width greater than 600 (2  item will show) 
    { breakPoint: { width: 1000, item: 4 } } //if width greater than 1000 (4 item will show) 
]

function load() {
    for (let i = 0; i < responsive.length; i++) {
        if (window.innerWidth > responsive[i].breakPoint.width) {
            items = responsive[i].breakPoint.item
        }
    }
    start();
}

function start() {
    var totalItemsWidth = 0
    for (let i = 0; i < allBox.length; i++) {
        // width and margin setup of items
        allBox[i].style.width = (containerWidth / items) - margin + "px";
        allBox[i].style.margin = (margin / 2) + "px";
        totalItemsWidth += containerWidth / items;
        totalItems++;
    }

    // thumbnail-container width set up
    container.style.width = totalItemsWidth + "px";

    // slides controls number set up
    const allSlides = Math.ceil(totalItems / items);
    const ul = document.createElement("ul");
    for (let i = 1; i <= allSlides; i++) {
        const li = document.createElement("li");
        li.id = i;
        li.innerHTML = i;
        li.setAttribute("onclick", "controlSlides(this)");
        ul.appendChild(li);
        if (i == 1) {
            li.className = "active";
        }
    }
    controls.appendChild(ul);
}

// when click on numbers slide to next slide
function controlSlides(ele) {
    // select controls children  'ul' element 
    const ul = controls.children;

    // select ul children 'li' elements;
    const li = ul[0].children


    var active;

    for (let i = 0; i < li.length; i++) {
        if (li[i].className == "active") {
            // find who is now active
            active = i;
            // remove active class from all 'li' elements
            li[i].className = "";
        }
    }
    // add active class to current slide
    ele.className = "active";

    var numb = (ele.id - 1) - active;
    jumpSlideWidth = jumpSlideWidth + (containerWidth * numb);
    container.style.marginLeft = -jumpSlideWidth + "px";
}

window.onload = load();



// side 

const sidedrawer = document.querySelector(".sidedrawer");
const backdrop = document.querySelector(".backdrop")
const bars = document.getElementById("bars");

bars.addEventListener("click", () => {
    sidedrawer.classList.add('active');
    backdrop.classList.add('show');
});

backdrop.addEventListener('click', () => {
    sidedrawer.classList.remove("active");
    backdrop.classList.remove("show");
});





var inc = document.getElementsByClassName("stepper");
for (i = 0; i < inc.length; i++) {
    var incI = inc[i].querySelector("input"),
        id = incI.getAttribute("id"),
        min = incI.getAttribute("min"),
        max = incI.getAttribute("max"),
        step = incI.getAttribute("step");
    document
        .getElementById(id)
        .previousElementSibling.setAttribute(
            "onclick",
            "stepperInput('" + id + "', -" + step + ", " + min + ")"
        );
    document
        .getElementById(id)
        .nextElementSibling.setAttribute(
            "onclick",
            "stepperInput('" + id + "', " + step + ", " + max + ")"
        );
}

function stepperInput(id, s, m) {
    var el = document.getElementById(id);
    if (s > 0) {
        if (parseInt(el.value) < m) {
            el.value = parseInt(el.value) + s;
        }
    } else {
        if (parseInt(el.value) > m) {
            el.value = parseInt(el.value) + s;
        }
    }
}

jQuery(document).ready(function($){         

    $('.option').on({
     'click': function(){
        alert('masuk');
        var angka= $(this).val();
        // var stock = $(this).val();
        hargaPerUkuran.innerHTML=angka;
        alert (angka);
            // var stock= $(this).val();
            // alert(angka);
               // $('#change-image').attr('src', base_url+'/'+$thumbnail);
           }
       });
});

var inc = document.getElementsByClassName("stepper");
for (i = 0; i < inc.length; i++) {
    var incI = inc[i].querySelector("input"),
    id = incI.getAttribute("id"),
    min = incI.getAttribute("min"),
    max = incI.getAttribute("max"),
    step = incI.getAttribute("step");
    document
    .getElementById(id)
    .previousElementSibling.setAttribute(
        "onclick",
        "stepperInput('" + id + "', -" + step + ", " + min + ")"
        );
    document
    .getElementById(id)
    .nextElementSibling.setAttribute(
        "onclick",
        "stepperInput('" + id + "', " + step + ", " + max + ")"
        );
}

function stepperInput(id, s, m) {
    var el = document.getElementById(id);
    if (s > 0) {
        if (parseInt(el.value) < m) {
            el.value = parseInt(el.value) + s;
        }
    } else {
        if (parseInt(el.value) > m) {
            el.value = parseInt(el.value) + s;
        }
    }
}

