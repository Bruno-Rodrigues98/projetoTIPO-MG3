const links = document.querySelectorAll('.navbar-nav a');

// Percorre os links e adiciona a classe "active" ao link correspondente à página atual
for (let i = 0; i < links.length; i++) {
  if (links[i].href === window.location.href) {
    links[i].classList.add('active');
  }
}
