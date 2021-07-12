const contBanner = document.querySelector('.banner');

let starBqner = 0;

if (contBanner) {
    let contBackgroundReel = contBanner.querySelector('.contBackground .reel');
    let contBoxedReel = contBanner.querySelector('.contBoxed .reel');

    contBackgroundReel.style.width = '' + (4 * 100) +'%';


    let itemBg = contBackgroundReel.querySelectorAll('.item');
    let itemText = contBoxedReel.querySelectorAll('.item');

    let buttom_slider = document.querySelector('.buttom_slider');

    let left = buttom_slider.querySelector('.left');
    let right = buttom_slider.querySelector('.right');

    right.addEventListener('click', () => {
        if (starBqner === 3) {
            starBqner = 0;
            contBackgroundReel.style.transform = 'translateX(0%)';
            contBoxedReel.style.transform = 'translateX(0%)';
        } else {
            starBqner += 1;
            contBackgroundReel.style.transform = 'translateX(' + (starBqner * -25) + '%)';
            contBoxedReel.style.transform = 'translateX(' + (starBqner * -25) + '%)';
        }
    })
    left.addEventListener('click', () => {
        if (starBqner === 0) {
            starBqner = 3;
            contBackgroundReel.style.transform = 'translateX(' + (2 * -25) + '%)';
            contBoxedReel.style.transform = 'translateX(' + (2 * -25) + '%)';
        } else {
            starBqner -= 1;
            contBackgroundReel.style.transform = 'translateX(' + (starBqner * -25) + '%)';
            contBoxedReel.style.transform = 'translateX(' + (starBqner * -25) + '%)';
        }
    })
    function loopBanner () {
        setTimeout(function () {
            if (starBqner === 3) {
                starBqner = 0;
                contBackgroundReel.style.transform = 'translateX(0%)';
                contBoxedReel.style.transform = 'translateX(0%)';
            } else {
                starBqner += 1;
                contBackgroundReel.style.transform = 'translateX(' + (starBqner * -25) + '%)';
                contBoxedReel.style.transform = 'translateX(' + (starBqner * -25) + '%)';
            }
            loopBanner();
        }, 50000)
    }
    loopBanner();

    //itemText.forEach((item, index) => {

    //})

}

//Menu left
const menuLatelItem = document.querySelectorAll('.item.menuLateral')
if (menuLatelItem) {
    menuLatelItem.forEach((item) => {
        item.addEventListener('click', () => {
            if (item.classList.contains('active')) {
                item.classList.toggle('active');
            } else {
                menuLatelItem.forEach((x) => {
                    x.classList.remove('active');
                });
                item.classList.toggle('active');
            };
        })
    })
}