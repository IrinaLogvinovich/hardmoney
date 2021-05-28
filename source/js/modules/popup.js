const inputs = document.querySelectorAll('.contacts input');
const areas = document.querySelectorAll('.contacts textarea');
const popup = document.querySelector('.popup');
const popupCloseButton = popup.querySelector('.popup__close');

function setRequired (array) {
  array.forEach(function(item) {
    if (item.classList.contains('wpcf7-validates-as-required')) {
      item.setAttribute('required', 'true');
    }
  });
}

function checkValidity (array) {
  array.forEach(function(item) {
    if (item.validity.valid === false) {
      item.style = 'border: 1px solid red';
    } else {
      item.style = "";
    }
  });
}
setRequired(inputs);
setRequired(areas);

document.addEventListener( 'wpcf7mailsent', function( event ) {
  checkValidity (inputs);
  checkValidity (areas);
  popup.style.opacity = 1;
  popup.style.visibility = 'visible';
});

 document.addEventListener( 'wpcf7invalid', function( event ) {
  checkValidity (inputs);
  checkValidity (areas);
 });

popupCloseButton.addEventListener('click', function(){
  popup.style.opacity = 0;
  popup.style.visibility = 'hidden';
});
