let buttonMenu = document.querySelector('#toogleNav')
let overlayM = document.querySelector('#overlayMenu')
let navM = document.querySelector('#navBar')
let lstS = document.querySelector('#mItem_sub')
let subM = document.querySelector('.submenu')


buttonMenu.addEventListener('click', (e) => {
    e.preventDefault()
    toggleBtnMenu()
    overlayM.classList.toggle('opacity-100')
    overlayM.classList.toggle('scale-x-100')
    //navM.classList.toggle('left-0')
    if (navM.classList.contains('-left-full')) {
        navM.classList.remove('-left-full')
        navM.classList.add('left-0')
    }
    else {
        navM.classList.remove('left-0')
        navM.classList.add('-left-full')
    }
})

overlayM.addEventListener('click', (e) => {
    e.preventDefault()
    buttonMenu.querySelector('#bar-1').classList.remove('rotate-45', 'absolute')
    buttonMenu.querySelector('#bar-2').classList.remove('-rotate-45', 'absolute')
    buttonMenu.querySelector('#bar-2').classList.add('mt-1.5')
    buttonMenu.querySelector('#bar-3').classList.remove('opacity-0')
    overlayM.classList.remove('opacity-100')
    overlayM.classList.remove('scale-x-100')
    navM.classList.remove('left-0')
    navM.classList.add('-left-full')
})
document.querySelector('#openSubMenu').addEventListener('click', (e) => {
    e.preventDefault()
    let angl = lstS.querySelector('#angl_subm')
    angl.classList.toggle('rotate-180')
    if (window.innerWidth <= 1023) {
        if (subM.style.height >= subM.scrollWidth + "px") {
            subM.style.padding = "0px"
            subM.style.height = "0px"
        }
        else {
            subM.style.padding = "9px 0px 9px 20px"
            subM.style.height = subM.scrollHeight + "px"

        }
    }
})


window.addEventListener('load', (e) => {
    e.preventDefault()
    ScrollReveal('.item-blog', 'activesc')
    ScrollReveal('.fromLeft', 'activesec')
    ScrollReveal('.fromRight', 'activesec')
    ScrollReveal('.fromTop', 'activeY')
    ScrollReveal('.fromBottom', 'activeY')
})

window.addEventListener('scroll', (e) => {
    e.preventDefault()
    ScrollReveal('.item-blog', 'activesc')
    ScrollReveal('.fromLeft', 'activesec')
    ScrollReveal('.fromRight', 'activesec')
    ScrollReveal('.fromTop', 'activeY')
    ScrollReveal('.fromBottom', 'activeY')
})

let toggleBtnMenu = () => {
    toggleClass(buttonMenu.querySelector('#bar-1'), ['rotate-45', 'absolute'])
    toggleClass(buttonMenu.querySelector('#bar-2'), ['-rotate-45', 'absolute', 'mt-1.5'])
    toggleClass(buttonMenu.querySelector('#bar-3'), ['opacity-0'])
}

const toggleClass = (el, cls) => {
    if (Array.isArray(cls)) {
        cls.map((cl) => {
            el.classList.toggle(cl);
        });
    } else {
        el.classList.toggle(cls);
    }
};
function ScrollReveal(element, classApply) {
    let el = document.querySelectorAll(`${element}`)
    let windowH = window.innerHeight
    let revealP = 0
    el.forEach(element => {
        var revealtop = element.getBoundingClientRect().top
        if (revealtop < windowH - revealP)
            element.classList.add(`${classApply}`)
        /* else
            element.classList.remove(`${classApply}`) */
    })
}

