//Mobile nav functionality
let mobileNav = document.querySelector(".mobile_nav_closed");
let menuBtn = document.querySelector(".hamburger_menu");

let mobLi = document.querySelectorAll(".mobile_nav_links .menu-item-has-children")
let mobA = document.querySelectorAll(".mobile_nav_links .menu-item-has-children ul")
let mobBack = document.querySelector(".mob_back")
let mobBackOpen = document.querySelector(".mob_back_open")

const toggleBack = () => {
    mobBack.classList.toggle("mob_back_open")
}



menuBtn.addEventListener('click', () => {
    mobileNav.classList.toggle("mobile_nav")


        if(mobileNav.classList.contains("mobile_nav")){
            mobA.forEach(item => {
                item.style = "display: flex"

            })
        } else {
            mobA.forEach(item => {
                item.style = "width: 0vw"
                mobBack.classList.remove("mob_back_open")
            })
        }
        
});


mobLi.forEach((link, id) => {
    link.addEventListener('click', () => {
        mobA[id].style = "width: 100vw; transition: .3s; left: 50%;"
        toggleBack()
        
    })
})

mobBack.addEventListener('click', () => {
    mobA.forEach(item => {
        item.style = "width: 0vw"
    })
    toggleBack()
})

//Discover more button in software links
let serviceMenuItem = document.querySelectorAll(".nav .menu-item-has-children");
let subMenu = document.querySelectorAll("ul .sub-menu");



serviceMenuItem.forEach((dropDown, id) => {

    dropDown.addEventListener('mouseover', () => {

        subMenu[id].style.display = "flex"

        if(subMenu[id].hasChildNodes()){
            subMenu[id].childNodes.forEach((child) => {
                
                    if(child.nodeType === 1){
                        if(child.hasChildNodes()){
                            child.childNodes.forEach((smallChild) => {
                                if(smallChild.nodeType === 1){
                                smallChild.style.display = "block"
                                //console.log(smallChild)
                                }
                            })
                        
                    }
                }
            })
        }
    })
})



serviceMenuItem.forEach((dropDown, id) => {
    dropDown.addEventListener('mouseleave', () => {
        subMenu.forEach(menu => menu.style.display = "none")

    })
});



