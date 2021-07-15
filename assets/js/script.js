var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: '#navbar'
})
AOS.refresh();
AOS.init({
  once: true
})
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  var height = $(window).height() - 100;

  if (scroll >= height) {
    $(".navbar").addClass("fixed-top").addClass('bg-white');
  } else {
    $(".navbar").removeClass("fixed-top").removeClass('bg-white');
  }
});
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    margin: 70,
    loop: true,
    nav: true,
    autoWidth: true,
    items: 7,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      576: {
        items: 2
      },
      768: {
        items: 3
      },
      992: {
        items: 4
      },
      1400: {
        items: 5
      }
    }
  });
});