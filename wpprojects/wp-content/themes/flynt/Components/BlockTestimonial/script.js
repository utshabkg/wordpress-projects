import $ from 'jquery'
import 'core-js/es/number'
import Swiper, { Navigation, Pagination, A11y, Autoplay } from 'swiper/swiper.esm'
import 'swiper/swiper-bundle.css'

Swiper.use([Navigation, Pagination, A11y, Autoplay])

// var swiper = new Swiper(".testimonialSlider", {
//   allowTouchMove: true,

//   navigation: {
//     nextEl: ".sb-next",
//     prevEl: ".sb-prev",
//   },

//   pagination: {
//     el: ".s-pagination",
//     clickable: true
//   },

//   mousewheel: true,
//   keyboard: true,
// });

class TestimonialSlider extends window.HTMLDivElement {
  constructor(...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init() {
    this.$ = $(this)
    this.props = this.getInitialProps()
    this.resolveElements()
  }

  getInitialProps() {
    let data = {}
    try {
      data = JSON.parse($('script[type="application/json"]', this).text())
    } catch (e) { }
    return data
  }

  resolveElements() {
    this.$slider = $('[data-slider]', this)
    this.$buttonNext = $('[data-slider-button="next"]', this)
    this.$buttonPrev = $('[data-slider-button="prev"]', this)
    this.$pagination = $('[data-slider-pagination]', this)
  }

  connectedCallback() {
    this.initSlider()
  }

  initSlider() {
    const { options } = this.props
    const config = {
      a11y: options.a11y,
      centeredSlides: false,
      loop: true,
      lazyloading: true,
      initialSlide: 1,
      navigation: {
        nextEl: this.$buttonNext.get(0),
        prevEl: this.$buttonPrev.get(0)
      },
      slidesPerView: 3,
      spaceBetween: 0,
      // breakpoints: {
      //   1024: {
      //     slidesPerView: 3,
      //     spaceBetween: 30,
      //   }
      // },
      pagination: {
        el: '.s-pagination',
        // type: 'fraction',
        clickable: true,
      },
      autoplay: true,
      disableOnInteraction: true,
    }

    if (options.autoplay && options.autoplaySpeed) {
      config.autoplay = {
        delay: options.autoplaySpeed
      }
    }

    this.slider = new Swiper(this.$slider.get(0), config)
  }
}

window.customElements.define('flynt-slider-testimonial', TestimonialSlider, { extends: 'div' })
