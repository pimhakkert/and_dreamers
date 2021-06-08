import {PageFlip} from './page-flip';

window.addEventListener('load', () => {
    const element = document.querySelector('#hatstory');
    const settings = {
        width: 500, // base page width
        height: 700, // base page height

        // set threshold values:
        minWidth: 225,
        maxWidth: 1500,
        minHeight: 200,
        maxHeight: 700,

        showCover: true,
        size: "stretch",
        disableFlipByClick: true,
        maxShadowOpacity: 0.5,
        useMouseEvents: false,
        flippingTime: 750,
        mobileScrollSupport: false
    };

    const pageFlip = new PageFlip(element, settings);

    pageFlip.loadFromHTML(document.querySelectorAll('#hatstory .hatstory-page'));

    const previousButtons = document.querySelectorAll('.hatstory-previous');
    const nextButtons = document.querySelectorAll('.hatstory-next');

    for (let i = 0; i < previousButtons.length; i++) {
        previousButtons[i].addEventListener('click', () => {
            flipPrev(pageFlip);
        });
    }

    for (let i = 0; i < nextButtons.length; i++) {
        nextButtons[i].addEventListener('click', () => {
            flipNext(pageFlip);
        });
    }

    document.querySelector('#mobile-prev').addEventListener('click', () => {
        flipPrev(pageFlip);
    });

    document.querySelector('#mobile-next').addEventListener('click', () => {
        flipNext(pageFlip);
    });

    function flipPrev(pageFlip)
    {
        document.body.classList.add('noscroll');
        pageFlip.flipPrev();
    }

    function flipNext(pageFlip)
    {
        document.body.classList.add('noscroll');
        pageFlip.flipNext();
    }


    let mobilePrev = document.querySelector('#mobile-prev');
    let mobileNext = document.querySelector('#mobile-next');
    let pageNumber = document.querySelector('#mobile-page span');

    pageFlip.on('flip', (e) => {

        pageNumber.innerText = e.data + 1;

        //If book cover, remove previous page button
        if(e.data === 0)
        {
            if(!mobilePrev.classList.contains('pointer-events-none'))
            {
                mobilePrev.classList.add('pointer-events-none');
            }

            if(!mobilePrev.classList.contains('opacity-0'))
            {
                mobilePrev.classList.add('opacity-0');
            }
        }
        //If book end, remove next page button
        else if(e.data === 7)
        {
            if(!mobileNext.classList.contains('pointer-events-none'))
            {
                mobileNext.classList.add('pointer-events-none');
            }

            if(!mobileNext.classList.contains('opacity-0'))
            {
                mobileNext.classList.add('opacity-0');
            }
        }
        //If any other page, show both buttons
        else
        {
            if(mobilePrev.classList.contains('pointer-events-none'))
            {
                mobilePrev.classList.remove('pointer-events-none');
            }

            if(mobilePrev.classList.contains('opacity-0'))
            {
                mobilePrev.classList.remove('opacity-0');
            }

            if(mobileNext.classList.contains('pointer-events-none'))
            {
                mobileNext.classList.remove('pointer-events-none');
            }

            if(mobileNext.classList.contains('opacity-0'))
            {
                mobileNext.classList.remove('opacity-0');
            }
        }


        document.body.classList.remove('noscroll');
        }
    );
});


