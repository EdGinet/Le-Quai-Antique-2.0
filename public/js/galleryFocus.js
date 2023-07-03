const image = $('.image');
const focusImg = $('#focusImg');
const panel = $('#panel');

image.on('click', function() {
  const imgSrc = $(this).attr('src');
  const imgAlt = $(this).attr('alt');
  
  focusImg.attr('src', imgSrc);
  focusImg.attr('alt', imgAlt);
  
  panel.show();
  focusImg.show();
});

panel.on('click', function() {
  panel.hide();
  focusImg.hide();
});
