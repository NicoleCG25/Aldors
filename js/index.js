document.addEventListener('DOMContentLoaded', () => {
  // Seleciona todos os elementos com a classe 'slider'
  const sliders = document.querySelectorAll('.slider');

  // Seleciona o botão de 'anterior' pelo ID
  const btnPrev = document.getElementById('prev-button');

  // Seleciona o botão de 'próximo' pelo ID
  const btnNext = document.getElementById('next-button');

  // Define o índice do slide atual como 0 (primeiro slide)
  let currentSlide = 0;

  // Função para esconder todos os slides
  function hideSlider() {
    sliders.forEach(slide => slide.classList.remove('on'));
  }

  // Função para mostrar o slide atual
  function showSlider() {
    sliders[currentSlide].classList.add('on');
  }

  // Função para ir para o próximo slide
  function nextSlider() {
    hideSlider();
    currentSlide = (currentSlide === sliders.length - 1) ? 0 : currentSlide + 1;
    showSlider();
  }

  // Função para ir para o slide anterior
  function prevSlider() {
    hideSlider();
    currentSlide = (currentSlide === 0) ? sliders.length - 1 : currentSlide - 1;
    showSlider();
  }

  // Adiciona um evento de clique ao botão 'próximo' para mudar para o próximo slide
  btnNext.addEventListener('click', nextSlider);

  // Adiciona um evento de clique ao botão 'anterior' para mudar para o slide anterior
  btnPrev.addEventListener('click', prevSlider);

  // Mostra o slide inicial quando a página é carregada
  showSlider();
});
