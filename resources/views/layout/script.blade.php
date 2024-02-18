<script>
  const toggleSideMenu = () => {
  
  let sidemenu = $('.style_sidemenu__zyjXz')
  let backDrop = $('.offcanvas-backdrop')
  if (sidemenu.hasClass('hide')) {
    sidemenu.removeClass('hide')
    sidemenu.addClass('show')

    backDrop.removeClass('hide')
    backDrop.addClass('show')
  }
  else {
    sidemenu.removeClass('show')
    sidemenu.addClass('hide')

    backDrop.removeClass('show')
    backDrop.addClass('hide')
  }
}

const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // Add smooth scrolling animation
  });
}
$('#carousel').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  prevArrow: false,
  nextArrow: false,
  dots: true,
});
  
var container = document.getElementById("c-slider");
var nextBtn = document.getElementById("scroll_1_next");
var prevBtn = document.getElementById("scroll_1_prev");

function scrollContent(direction) {

  if (direction == 1)
    container.scrollLeft += 310;
  else
    container.scrollLeft -= 310;
  prevBtn.style.display = container.scrollLeft > 0 ? "block" : "none";
  nextBtn.style.display =
    container.scrollLeft + container.clientWidth >= container.scrollWidth - 300
      ? "none"
      : "block";
}

const accordionClickHandler = (ele) => {
  console.log(ele)
  $(ele).children(".collapse").toggleClass('show')
  $(ele).children("h2").children('button').toggleClass('collapsed')
}


</script>