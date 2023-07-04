// получаем кнопку формы
var submit = document.getElementById('form');
submit.onclick = function() {
    var name = document.getElementById('name').value;
    var age = document.getElementById('age').value;
    var email = document.getElementById('email').value;
    var number = document.getElementById('number').value;
    var soc = document.getElementById('soc').value;  
}
// назначаем обработчик нажатия на кнопку
//submit.addEventListener('click', function() {
  // получаем значения полей формы
  //var name = document.getElementById('name').value;
  //var age = document.getElementById('age').value;
  //var email = document.getElementById('email').value;
  //var number = document.getElementById('number').value;
  //var soc = document.getElementById('soc').value;

  // создаем URL для перенаправления на новую страницу с данными из формы
  var url = 'new.html' + '&name' + encodeURIComponent(name) + '&age=' + encodeURIComponent(age) + '&email=' + encodeURIComponent(email)+ '&number=' + encodeURIComponent(number)+ '&soc=' + encodeURIComponent(soc);

  // перенаправляем на новую страницу
  window.location.href = url;
