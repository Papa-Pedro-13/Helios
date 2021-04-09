document.addEventListener("DOMContentLoaded", () => {

  // const anchors = document.querySelectorAll('a[href*="#"]')

  // for (let anchor of anchors) {
  //   anchor.addEventListener('click', function (e) {
  //     e.preventDefault()

  //     const blockID = anchor.getAttribute('href').substr(1)

  //     document.getElementById(blockID).scrollIntoView({
  //       behavior: 'smooth',
  //       block: 'start'
  //     })
  //   })
  // }



  // const screenWidth = window.screen.width
  // if (screenWidth <= 768) {
  //   alert(screenWidth)
  //   let inp = document.querySelector('.big-form-input');
  //   inp.setAttribute('disabled', 'disabled');
  // };


  document.addEventListener('click', (e) => {
    let h_btn = document.querySelector('.header__btn');
    let h_btn_l = document.querySelectorAll('.header__btn-line');
    if (e.target == h_btn) {
      let btn = document.querySelector('.header__btn');
      btn.classList.toggle('header__btn--active');

      let menu = document.querySelector('.header__nav');
      menu.classList.toggle('header__nav--active');
    }
    for (i = 0; i < 4; i++) {
      if (e.target == h_btn_l[i]) {
        let btn = document.querySelector('.header__btn');
        btn.classList.toggle('header__btn--active');

        let menu = document.querySelector('.header__nav');
        menu.classList.toggle('header__nav--active');
      }
    }

    let us = document.querySelector('#services-item-desk');
    if (e.target == us) {
      let btn = document.querySelector('#services-item-desk');
      btn.classList.toggle('header__btn-desk--active');

      let menu = document.querySelector('.header__nav-serv-desk');
      menu.classList.toggle('header__nav-serv-desk--active');
    }
    let menu = document.querySelector('.header__nav');
    if (!(menu.classList.contains('header__nav--active'))) {

      let nav = document.querySelector('.header__nav');
      nav.classList.remove('header__nav--auto');

      let menu_s = document.querySelector('.header__services');
      menu_s.classList.remove('header__services--active');
    }

    let services_bt = document.querySelector('#services-item');
    if (e.target == services_bt) {
      let btn = document.querySelector('#services-item');
      btn.classList.toggle('header__nav-item--active');

      let nav = document.querySelector('.header__nav');
      nav.classList.add('header__nav--auto');

      let menu = document.querySelector('.header__services');
      menu.classList.toggle('header__services--active');
    }

    let video = document.querySelectorAll('.video');
    video.forEach(x => {
      if (e.target == x) {


        if (!(x.hasAttribute("controls"))) {
          x.setAttribute("controls", true);
          x.play();
          x.classList.remove('bg');
        }
      }
    });


    let read_more = document.querySelectorAll('.read-more');
    for (i = 0; i < 10; i++) {
      if (e.target == read_more[i]) {
        let read_text = document.querySelectorAll('.recall__item-text');
        read_text[i].setAttribute("style", "height:auto; overflow:visible;");
        e.target.setAttribute("style", "display:none;");
      }
    }

    let form_btn = document.querySelectorAll('.num__block-item');

    form_btn.forEach(x => {
      let form_btn = document.querySelectorAll('.num__block-item');
      if (e.target == form_btn[11]) {
        let input = document.getElementById('phone-input');
        input.value = input.value.slice(0, input.value.length - 1);
      }
      else if (e.target == x) {
        let input = document.getElementById('phone-input');
        input.value += x.dataset.num;
      }
    });

    let fr_btn = document.querySelectorAll('.main__rate-link');
    for (i = 0; i < 2; i++) {
      if (e.target == fr_btn[i]) {
        let maxForm = document.querySelector('.big-form');
        maxForm.classList.add('big-form--active');
      }
    }
    let fr_btn_c = document.querySelectorAll('.big-form-close');
    for (i = 0; i < 2; i++) {
      if (e.target == fr_btn_c[i]) {
        let maxForm = document.querySelector('.big-form');
        maxForm.classList.remove('big-form--active');
      }
    }
  })


  for (let i = 0; i < 15; i++) {
    let ch = document.querySelectorAll('.list-item>input');
    ch[i].addEventListener('change', () => {
      let form = document.querySelector('.claim-n');
      if (!(form.classList.contains("claim--active"))) {
        if (ch[i].checked) {
          let fot = document.querySelector('.footer');
          form.classList.add('claim--active');
          setTimeout(() => form.setAttribute('style', 'left: 0; opacity: 1; '), 1000);
          setTimeout(() => fot.setAttribute('style', 'padding-bottom: 250px; '), 1000);
        }
      }

    });



  }

  otherCheckbox.addEventListener('change', () => {
    if (otherCheckbox.checked) {
      otherText.style.visibility = 'visible';
      otherText.value = '';
    } else {
      otherText.style.visibility = 'hidden';
    }
  });
});



