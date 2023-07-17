const currentUrl = window.location.href;
const url1 = 'http://localhost/Techma/Public/'
const url2 = 'http://localhost/Techma/Public/employe'
const url3 = 'http://localhost/Techma/Public/admin'


if (currentUrl == url1 ) {

  let element = document.getElementById('dashboard');
  element.classList.add('active');

} else if (currentUrl == url2) {

  let element = document.getElementById('employe');
  element.classList.add('active');

} else if (currentUrl == url3 ) {

  let element = document.getElementById('admin');
  element.classList.add('active');

}else{
  let element = document.getElementById('dashboard');
  element.classList.add('active');
}