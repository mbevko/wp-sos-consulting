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


let serviceMenuItem = document.querySelectorAll("#menu-item-119 a")[0];
let subMenu = document.querySelectorAll("nav .sub-menu")[0];

serviceMenuItem.addEventListener('mouseenter', () => {
    //subMenu.style.visibility = "visible"
    alert("hello")
    //subMenu.classList.toggle("sub-menu-active")
});

/* serviceMenuItem.addEventListener('mouseover', () => {
    //subMenu.style.visibility = "visible"
    subMenu.classList.toggle("sub-menu-active")
})


 */