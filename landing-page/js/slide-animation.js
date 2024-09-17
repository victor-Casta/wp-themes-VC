

document.addEventListener("DOMContentLoaded", (event) => {
  gsap.to(
    '.carousel-item',
    { x: -1400, duration: 30, ease: 'linear', repeat: Infinity, yoyo: true },
  )
})