document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector("nav .nav-pills");
    nav.addEventListener("click", (e) => {
        if (e.target.classList.contains("nav-link")) {
            document
                .querySelector(".nav .nav-link.active")
                ?.classList.remove("active");
            e.target.classList.add("active");
        }
    });


    AOS.init();
    document.querySelectorAll('.list-font').forEach(item =>
        item.addEventListener('click', () => {
            document.querySelectorAll('.list-font').forEach(li => li.classList.remove('active'));
            document.querySelectorAll('.tab-pane').forEach(el => el.classList.remove('show', 'active'));
            item.classList.add('active');
            document.querySelector(item.getAttribute('data-target')).classList.add('show', 'active');
        })
    );
});

let lastScrollTop = 0;
const navbar = $('.navbar');

$(window).scroll(function() {
    let scrollTop = $(this).scrollTop();

    if (scrollTop > lastScrollTop) {
        navbar.addClass('slide-up');
    } else {
        navbar.removeClass('slide-up');
    }

    lastScrollTop = scrollTop;
});
