//Mobile nav functionality
let mobileNav = document.querySelector(".mobile_nav_closed");
let menuBtn = document.querySelector(".hamburger_menu");

menuBtn.addEventListener('click', () => {
    mobileNav.classList.toggle("mobile_nav")
});


//Discover more button in software links
let discoverMoreBtn = document.querySelector(".discover_btn")

discoverMoreBtn.addEventListener('click', () => {
    document.querySelector(".software_links2_closed").classList.toggle("software_links2")
    
})

/* let serviceMenuItem = document.querySelector(".menu-item-59");

serviceMenuItem.addEventListener('mouseenter', () => {
    document.querySelectorAll("nav .sub-menu")[0].style.visibility = "visible";
})

document.querySelectorAll("nav .sub-menu")[0].addEventListener('mouseleave', () => {
    document.querySelectorAll("nav .sub-menu")[0].style.visibility = "hidden";
})
 */