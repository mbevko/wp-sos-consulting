//Mobile nav functionality
let mobileNav = document.querySelector(".mobile_nav_closed");
let menuBtn = document.querySelector(".hamburger_menu");

menuBtn.addEventListener('click', () => {
    mobileNav.classList.toggle("mobile_nav")
});


//Discover more button in software links
let serviceMenuItem = document.querySelectorAll("nav .menu-item-has-children");
let subMenu = document.querySelectorAll("ul .sub-menu");

let navLink = document.querySelectorAll(".navlink")


/* serviceMenuItem.forEach((dropDown, id) => {
    dropDown.addEventListener('mouseenter', () => {
        subMenu[id].style.visibility = "visible" 

        if(subMenu[id].hasChildNodes()){
            subMenu[id].childNodes.forEach((child) => {
                
                    if(child.nodeType === 1){

                        if(child.hasChildNodes()){
                            child.childNodes.forEach((smallChild) => {
                                if(smallChild.nodeType === 1){
                                smallChild.style.visibility = "visible"
                                console.log(smallChild)
                                }
                            })
                        
                    }
                }
            })
        }
    })
});
 */




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
       // dropDown.style.display = "none" 
        
        subMenu.forEach(menu => menu.style.display = "none")

    })
});