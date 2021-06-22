/* galeria */
/* galeria variables */
var galleryInt = document.getElementById("carousel_int");
var galleryExt = document.getElementById("carousel_int2");
var galleryCom = document.getElementById("carousel_int3");

var elements = document.getElementsByClassName("gallery__btn");

var galleryChange = function() {
  galleryInt.classList.add("carousel__hide");
  galleryExt.classList.add("carousel__hide");
  galleryCom.classList.add("carousel__hide");
  var attribute = this.getAttribute("data-gallery");
  var galleryActive = document.getElementById(attribute);
  galleryActive.classList.remove("carousel__hide");
  for (var i = 0; i < elements.length; i++) {
    elements[i].classList.remove("active");
  }
  this.classList.add('active');
};

for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', galleryChange, false);
}

/* floors */
var floorsButtons = document.getElementsByClassName("floors__item");
var floorsContent = document.getElementsByClassName("floor_content");
var floorsImage = document.getElementsByClassName("floors__image");
var selectFloor = document.getElementById("selectFloor");

var floorsChange = function() {
  for (var i = 0; i < floorsImage.length; i++) {
    floorsImage[i].classList.add("floors__image--inactive");
  }
  for (var i = 0; i < floorsContent.length; i++) {
    floorsContent[i].classList.add("floor_content--inactive");
  }
  for (var i = 0; i < floorsButtons.length; i++) {
    floorsButtons[i].classList.remove("active");
  }

  this.classList.add('active');

  var attribute = this.getAttribute("data-floors");
  var floorActive = document.getElementById(attribute);
  floorActive.classList.remove("floor_content--inactive");

  var attrPhoto = this.getAttribute("data-floors");
  var photoActive = document.getElementById('i_'+attrPhoto);
  photoActive.classList.remove("floors__image--inactive");

};

var floorsChange2 = function() {
  for (var i = 0; i < floorsImage.length; i++) {
    floorsImage[i].classList.add("floors__image--inactive");
  }
  for (var i = 0; i < floorsContent.length; i++) {
    floorsContent[i].classList.add("floor_content--inactive");
  }
  for (var i = 0; i < floorsButtons.length; i++) {
    floorsButtons[i].classList.remove("active");
  }

  this.classList.add('active');

  var attribute = selectFloor.value;
  var floorActive = document.getElementById(attribute);
  floorActive.classList.remove("floor_content--inactive");

  var attrPhoto = selectFloor.value;
  var photoActive = document.getElementById('i_'+attrPhoto);
  photoActive.classList.remove("floors__image--inactive");


}

for (var i = 0; i < floorsButtons.length; i++) {
    floorsButtons[i].addEventListener('click', floorsChange, false);
}

if(selectFloor){
selectFloor.addEventListener('change', floorsChange2, false);
 }


function menuToggle() {
  var x = document.getElementById("menu__list");
  x.classList.toggle("menu__list-show");
}

var myCarousel = document.querySelector('#carouselExampleIndicators')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 3000
})

var glide = new Glide('.glide__success', {
  type: 'carousel',
  perView: 3,
  autoplay: 3000,
  focusAt: 'center',
  breakpoints: {
    800: {
      perView: 3
    },
    480: {
      perView: 3
    }
  }
})

glide.mount()






