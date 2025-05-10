const body = document.body

const headerLvl2Swiper = new Swiper('.cg-header-lvl2-swiper', {
  slidesPerView: 'auto',
  spaceBetween: 30,
  slideClass: 'menu-item'
});
const headerLvl3Swiper = new Swiper('.cg-header-lvl3-swiper', {
  slidesPerView: 'auto',
  spaceBetween: 0,
  slideClass: 'menu-item'
});

const toggleHeaderMenu = document.querySelector('#toggle-header-menu')
const headerMenuInner = document.querySelector('.cg-header-menu-inner')
if(toggleHeaderMenu) {
  toggleHeaderMenu.addEventListener('click', ()=> {
      setTimeout(()=>{
        body.classList.toggle('toggle-header-menu-active')
      }, 50)
    })

  window.addEventListener('click', (event)=> {
    if(body.classList.contains('toggle-header-menu-active')) {
      if(!headerMenuInner.contains(event.target)) {
        body.classList.remove('toggle-header-menu-active')
      }
    }
  })
}


const toggleSearch = document.querySelector('#toggle-search')
const headerSearch = document.querySelector('.cg-header-search')
if(toggleSearch) {
  toggleSearch.addEventListener('click', ()=> {
    body.classList.toggle('toggle-search-active')
    body.classList.remove('toggle-header-menu-active')
  })

  headerSearch.querySelector('.btn-close').addEventListener('click', ()=> {
    body.classList.remove('toggle-search-active')
  })
}

const toggleRegion = document.querySelector('#toggle-region')
const headerRegion = document.querySelector('.cg-header-region')
if(toggleRegion) {
  toggleRegion.addEventListener('click', ()=> {
    body.classList.toggle('toggle-region-active')
    body.classList.remove('toggle-header-menu-active')
  })

  headerRegion.querySelector('.btn-close').addEventListener('click', ()=> {
    body.classList.remove('toggle-region-active')
  })
}

const toggleDarkmode = document.querySelector('#toggle-darkmode')
if(toggleDarkmode) {
  toggleDarkmode.addEventListener('click', ()=> {
    body.classList.toggle('toggle-darkmode-active')
    body.classList.remove('toggle-header-menu-active')
  })
}

const sectionTopicSwiperFeature = new Swiper('.cg-section-topic-swiper-feature', {
  spaceBetween: 16,
  slidesPerView: '1',
  enabled: true,
  breakpoints: {
    1024: {
      enabled: false,
      spaceBetween: 0
    }
  }
})

const sectionTopicSwiperContent = new Swiper('.cg-section-topic-swiper-content', {
  spaceBetween: 8,
  slidesPerView: 'auto',
  breakpoints: {
    1024: {
      enabled: false,
      spaceBetween: 0
    }
  }
})

const bannerSwiper = new Swiper('.cg-banner-swiper', {
  spaceBetween: 0,
  slidesPerView: 1
})