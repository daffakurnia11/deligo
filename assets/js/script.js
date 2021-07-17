const flashdata = $('#flash-data').data('flashdata');
const url = 'http://localhost/deligo/';

if (flashdata) {
  if (flashdata == 'Access Denied') {
    Swal.fire({
      icon: 'error',
      title: 'Akses Ditolak!',
      text: 'Email dan password salah!',
      confirmButtonColor: '#f2865d',
    })
  }
  if (flashdata == 'Submitted') {
    Swal.fire({
      icon: 'success',
      title: 'Pendaftaran Berhasil!',
      text: 'Terima kasih telah bersedia mendaftar. Tunggu info selanjutnya!',
      confirmButtonColor: '#65c083',
    })
  }
  if (flashdata == 'Asked') {
    Swal.fire({
      icon: 'success',
      title: 'Berhasil Dikirim!',
      text: 'Pertanyaan anda akan segera kami respon secepatnya. Terima kasih!',
      confirmButtonColor: '#65c083',
    })
  }
  if (flashdata == 'Deleted') {
    Swal.fire({
      icon: 'success',
      title: 'Berhasil Dihapus!',
      text: 'Data telah berhasil dihapus dari database.',
      confirmButtonColor: '#65c083',
    })
  }
}

$('.deleteButton').on('click', function (e) {
  e.preventDefault();
  const url = $(this).attr('href');
  Swal.fire({
    title: 'Data ingin dihapus?',
    text: "Data terhapus tidak bisa dikembalikan lagi!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#65c083',
    cancelButtonColor: '#f2865d',
    confirmButtonText: 'Hapus!',
    cancelButtonText: 'Batal!'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = url;
    }
  })
})

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
  let white = false;

  if (scroll >= height) {
    $(".navbar").addClass("fixed-top").addClass('bg-white');
    $("#imageLogo").attr('src', url + 'assets/img/logo-green.png');
  } else {
    $(".navbar").removeClass("fixed-top").removeClass('bg-white');
    $("#imageLogo").attr('src', url + 'assets/img/logo-white.png');
  }
});
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    margin: 70,
    loop: true,
    nav: true,
    // autoWidth: true,
    // autoHeight: true,
    items: 2,
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