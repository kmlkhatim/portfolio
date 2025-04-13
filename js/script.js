// JS de menu responsive
const menuIcon = document.querySelector('.bx-menu');
const nav = document.querySelector('nav');

menuIcon.addEventListener('click', () => {
  nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
});
