//Mobile nav functionality
let mobileNav = document.querySelector(".mobile_nav_closed");
let menuBtn = document.querySelector(".hamburger_menu");

menuBtn.addEventListener('click', () => {
    mobileNav.classList.toggle("mobile_nav")
});


//Discover more button in software links
let serviceMenuItem = document.querySelectorAll("nav .menu-item-has-children");
let subMenu = document.querySelectorAll("nav .sub-menu");

serviceMenuItem.forEach((dropDown, id) => {
    dropDown.addEventListener('mouseover', () => {
        subMenu[id].style.visibility = "visible" 
    })
});

serviceMenuItem.forEach((dropDown) => {
    dropDown.addEventListener('mouseleave', () => {
        subMenu.forEach(menu => menu.style.visibility = "hidden" )
    })
});