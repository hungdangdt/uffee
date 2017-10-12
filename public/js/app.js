'use strict';
$(document).ready(function () {
  console.log("Design and code by Phi Nguyen");
  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    slidesPerView: 3,
    paginationClickable: true,
    spaceBetween: 30,
    freeMode: true
  });
  var body = document.body;
  $('#main').imagesLoaded()
    .always(function (instance) {
      console.log('all images loaded');
      body.classList.remove('loading');
    })
    .done(function (instance) {
      console.log('all images successfully loaded');
    })
    .fail(function () {
      console.log('all images loaded, at least one is broken');
    })
    .progress(function (instance, image) {
      var result = image.isLoaded ? 'loaded' : 'broken';
      console.log('image is ' + result + ' for ' + image.img.src);
    });
  $('#image-url').on('click', function () {
    this.setSelectionRange(0, this.value.length);
    // $('#image-url').setSelectionRange(0, $('#image-url').value.length);
  });
});