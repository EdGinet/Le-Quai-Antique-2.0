const imgSlider = document.getElementsByClassName('image-slider');
const next = document.querySelector('.next');
const previous = document.querySelector('.previous');
let etape = 0;
let nbrImage = imgSlider.length;


function removeActiveImage() {
  for (let i = 0; i < nbrImage; i++) {
    imgSlider[i].classList.remove('active');
  }
}

next.addEventListener('click', function () {
  etape++;
  if (etape >= nbrImage) {
    etape = 0;
  }
  removeActiveImage();
  imgSlider[etape].classList.add('active');
})

previous.addEventListener('click', function () {
  etape--;
  if (etape < 0) {
    etape = nbrImage - 1;
  }
  removeActiveImage();
  imgSlider[etape].classList.add('active');
})