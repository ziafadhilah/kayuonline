const sidedrawer_love = document.querySelector(".sidedrawer_love");
const backdrop = document.querySelector(".backdrop")
const love = document.getElementById("love");

love.addEventListener("click", () => {
    sidedrawer_love.classList.add('active');
    backdrop.classList.add('show');
});

backdrop.addEventListener('click', () => {
    sidedrawer_love.classList.remove("active");
    backdrop.classList.remove("show");
});


// tabs in toko 

const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget)
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active')
        })
        tabs.forEach(tab => {
            tab.classList.remove('active')
        })
        tab.classList.add('active')
        target.classList.add('active')
    })
})



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



