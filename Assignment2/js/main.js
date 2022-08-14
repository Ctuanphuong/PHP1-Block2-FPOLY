"use strict";

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// scroll header
window.addEventListener('scroll',() => {
    const header_top = $('.header-top .content-top-bar');
    const nav = $('.header-top .wrap-menu-desktop');


    if (document.body.scrollTop > 40|| document.documentElement.scrollTop > 40) {
        header_top.style.display = 'none';
        nav.style.backgroundColor = '#ffffff';
       nav.style.borderBottom = '1px solid rgb(234, 230, 230)';
        nav.style.transition  = "all .4s linear";
      } else {
        header_top.style.display = 'flex';
        nav.style.backgroundColor = 'transparent';
        nav.style.padding = '0';
        nav.style.borderBottom = 'none';
      }

})
