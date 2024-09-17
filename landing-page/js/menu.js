const MOBILE_ICON = document.querySelector('.menu-mobile-icon')
const CLOSE_MOBILE_ICON = document.querySelector('.close-icon')
const MOBILE_MENU =  document.querySelector('.mobile-menu')

MOBILE_ICON.addEventListener('click', () => {
  MOBILE_MENU.classList.toggle('active')
})
CLOSE_MOBILE_ICON.addEventListener('click', () => {
  MOBILE_MENU.classList.remove('active')
})