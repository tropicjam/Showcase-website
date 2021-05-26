@extends('layouts.master')

@section('header-content')
    <div class="flex justify-center items-center h-4/5">
        <div id="header-content-container" class="mx-auto max-w-5xl max-h-5xl text-center text-white hidden border border-white p-20">
            <h2 class="text-6xl my-5">Examples of javascript skills</h2>
            <p class="my-5">On this page please find some examples that I have created to showcase my skills with elements within a website.</p>
        </div>
    </div>
    <x-scroll-chevron link="#content" colour="white"></x-scroll-chevron>
@endsection

@section('content')
    <x-feature title="Expandable tab">
        <x-slot name="description">This is toggle tab that uses the slideToggle() function to show/hide the contents of the tab.</x-slot>
        <x-slot name="feature">
            <div class="tab-container">
                <div class="tab-header">
                    <button class="tab-button">Tab header (Click to expand)</button>
                </div>
                <div class="tab-content">
                    <p class="m-0 p-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia modi itaque tempora illum perspiciatis recusandae? Porro rem praesentium exercitationem doloremque iste neque perferendis ipsam dolor blanditiis. Dolor id quidem dicta!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia modi itaque tempora illum perspiciatis recusandae? Porro rem praesentium exercitationem doloremque iste neque perferendis ipsam dolor blanditiis. Dolor id quidem dicta!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia modi itaque tempora illum perspiciatis recusandae? Porro rem praesentium exercitationem doloremque iste neque perferendis ipsam dolor blanditiis. Dolor id quidem dicta!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia modi itaque tempora illum perspiciatis recusandae? Porro rem praesentium exercitationem doloremque iste neque perferendis ipsam dolor blanditiis. Dolor id quidem dicta!</p>
                </div>
            </div>
        </x-slot>
    </x-feature>
    <x-feature title="Image slider">
        <x-slot name="description">A simple image slider</x-slot>
        <x-slot name="feature">
            <div class="image-slides-container">
                <div class="slide-container fade">
                    <div class="numbertext">
                        1 / 3
                    </div>
                    <img src="/assets/forest-1200.jpg" alt="">
                    <div class="captionText">Caption one</div>
                </div>
                <div class="slide-container fade">
                    <div class="numbertext">
                        2 / 3
                    </div>
                    <img src="/assets/hamburg-1200.jpg" alt="">
                    <div class="captionText">Caption two</div>
                </div>
                <div class="slide-container fade">
                    <div class="numbertext">
                        3 / 3
                    </div>
                    <img src="/assets/forest-1200.jpg" alt="">
                    <div class="captionText">Caption three</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <div class="text-center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </x-slot>
    </x-feature>
    <script>
        //Image slideshow

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide-container");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 
    </script>
@endsection