/* ========================= NAVBAR ========================= */

document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.getElementById('navbar-bs');

  const handleScroll = () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled'); 
    } else {
      navbar.classList.remove('scrolled'); 
    }
  };

  window.addEventListener('scroll', handleScroll);
  handleScroll();
});
/* ========================= NAVBAR ========================= */
document.querySelector('.lang-btn').addEventListener('click', function () {
    document.querySelector('.lang-dropdown').classList.toggle('active');
});

// إغلاق القائمة إذا كبس خارجها
document.addEventListener('click', function (e) {
    const dropdown = document.querySelector('.lang-dropdown');
    if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('active');
    }
});
