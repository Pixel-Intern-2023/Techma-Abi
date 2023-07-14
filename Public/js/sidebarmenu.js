const currentUrl = window.location.href;
const url = 'http://localhost/Techma/Public/'


if (currentUrl.includes(url)) {
  let element = document.getElementById('dashboard');
  element.classList.add('active');
}