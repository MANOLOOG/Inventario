const hamburgerMenu = document.querySelector('.hamburger');
const nav = document.querySelector('nav')

const menuIsActive = () => {
    hamburgerMenu.classList.toggle('active');
};
hamburgerMenu.addEventListener('click', menuIsActive);

hamburgerMenu.addEventListener('click', () => {
    nav.classList.toggle('active');
});
