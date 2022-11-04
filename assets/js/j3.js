document.querySelector(".hamburger-menu").addEventListener("click",()=>{
    document.querySelector(".containerx").classList.toggle('change');
});

const dropdownItems = document.querySelectorAll('.dropdown-hover')

dropdownItems.forEach(dropdownItems=>{
    dropdownItems.addEventListener('mouseover',()=>{
        dropdownItems.lastElementChild.style.cssText='opacity:1;visibility:visible' 
    })
    dropdownItems.addEventListener('mouseout',()=>{
        dropdownItems.lastElementChild.style.cssText='opacity:0;visibility:hidden' 
    })
})

