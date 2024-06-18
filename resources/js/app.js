import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.getElementById('carousel');
    let currentIndex = 0;
    const items = carousel.querySelectorAll('.carousel-item');
    const totalItems = items.length;
  
    function showItem(index) {
      items.forEach((item, i) => {
        item.classList.toggle('active', i === index);
      });
    }
  
    document.querySelector('.carousel-prev').addEventListener('click', function () {
      currentIndex = (currentIndex === 0) ? totalItems - 1 : currentIndex - 1;
      showItem(currentIndex);
    });
  
    document.querySelector('.carousel-next').addEventListener('click', function () {
      currentIndex = (currentIndex === totalItems - 1) ? 0 : currentIndex + 1;
      showItem(currentIndex);
    });
  });
const toggleBtn = document.getElementById('toggleBtn');
const dropdownMenu = document.getElementById('dropdownMenu');

toggleBtn.addEventListener('click', function() {
  dropdownMenu.classList.toggle('hidden');
});
