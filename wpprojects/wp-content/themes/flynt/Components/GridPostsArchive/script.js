/* eslint-disable comma-dangle */
import $ from 'jquery'
import jqueryBridget from 'jquery-bridget'
import infiniteScroll from 'infinite-scroll'
import Masonry from 'masonry-layout'
import Packery from 'packery'
import imagesLoaded from 'imagesloaded'

// Infinite Scroll
jqueryBridget('infiniteScroll', infiniteScroll, $)
$('.posts').infiniteScroll({
  path: '.pageloadMore',
  append: '.post',
  // status: '.scroller-status',
  hideNav: '.pagination-loadMore a',
  // loading: {
  //   finishedMsg: 'No more pages to load.',
  //   img: 'http://i.imgur.com/6RMhx.gif'
  // }
})

// Masonry Grid
jqueryBridget('Masonry', Masonry, $)
// $('.posts').Masonry({
//   // options
//   itemSelector: '.post',
//   // use element for option
//   columnWidth: '.post',
//   percentPosition: true
// })

// init Masonry
// var $grid = $('.posts').Masonry({
//   itemSelector: '.post',
//   percentPosition: true,
//   columnWidth: '.post',
// })
// layout Masonry after each image loads
jqueryBridget('imagesLoaded', imagesLoaded, $)
// $grid.imagesLoaded().progress(function () {
//   $grid.Masonry()
// })

// var grid = document.querySelector('.posts')
// var msnry = new Masonry(grid, {
//   itemSelector: '.post',
//   columnWidth: '.post',
//   percentPosition: true
// })
// imagesLoaded(grid).on('progress', function () {
//   // layout Masonry after each image loads
//   msnry.layout()
// })

// Packery: Gapless Draggables
// jqueryBridget('Packery', Packery, $)
// $('.posts').Packery({
//   // options
//   itemSelector: '.post',
//   gutter: 10
// })

class GridPostsArchive extends window.HTMLDivElement {
  constructor(...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init() {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements() {
    this.$posts = $('.posts', this)
    this.$pagination = $('.pagination', this)
  }

  bindFunctions() {
    this.onLoadMore = this.onLoadMore.bind(this)
  }

  bindEvents() {
    this.$.on('click', '[data-action="loadMore"]', this.onLoadMore)
  }

  onLoadMore(e) {
    // e.preventDefault()

    // const $target = $(e.currentTarget).addClass('button--disabled')

    // const url = new URL(e.currentTarget.href)
    // url.searchParams.append('contentOnly', 1)

    // $.ajax({
    //   url: url
    // }).then(
    //   response => {
    //     const $html = $(response)
    //     const $posts = $('.posts', $html)
    //     const $pagination = $('.pagination', $html)

    //     this.$posts.append($posts.html())
    //     this.$pagination.html($pagination.html() || '')
    //   },
    //   response => {
    //     console.error(response)
    //     $target.removeClass('button--disabled')
    //   }
    // )
  }
}

window.customElements.define('flynt-grid-posts-archive', GridPostsArchive, { extends: 'div' })
