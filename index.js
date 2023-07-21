function redirigirPagina() {
    if (window.innerWidth < 686) {
      window.location.href = "pagina_alt1.html";
    }
  }
  
  // Llama a la función al cargar la página
  redirigirPagina();
  
  // Llama a la función cuando cambie el tamaño de la ventana
  window.addEventListener('resize', redirigirPagina);