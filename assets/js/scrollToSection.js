function scrollToDoveLavoro() {
  const section = document.getElementById('third-section');
  const offset = 120; // Offset di -100px
  
  const sectionPosition = section.getBoundingClientRect().bottom + window.scrollY;
  
  window.scrollTo({
    top: sectionPosition - offset,
    behavior: 'smooth'
  });
}

function scrollToChiSono() {
  const section = document.getElementById('first-section');
  const offset = 100; // Offset di -100px
  
  const sectionPosition = section.getBoundingClientRect().bottom + window.scrollY;
  
  window.scrollTo({
    top: sectionPosition - offset,
    behavior: 'smooth'
  });
}