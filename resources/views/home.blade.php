@extends('layouts.master')

@section('header-content')
    <div class="flex justify-center items-center h-4/5">
        <div id="header-content-container" class="mx-auto max-w-5xl max-h-5xl text-center text-white hidden border border-white p-20">
            <h2 class="text-6xl my-5">Welcome to my showcase</h2>
            <p class="my-5">Showcase is a website that allows me to shwocase my abilities</p>
        </div>
    </div>
    <x-scroll-chevron link="#content" colour="white"></x-scroll-chevron>
@endsection

@section('content')
    <div id="about-section-container" class="h-screen">
        <div id="about-section" class="flex items-center justify-between max-w-screen-xl mx-auto h-4/5">
            <div class="about-img-container w-1/4">
                <img src="/assets/avatar-450x450.svg" alt="Avatar image">
            </div>
            <div class="about-bio-container w-3/4 my-auto p-10">
                <h2 id="about-header" class="text-5xl">All about me</h2>
                <p id="about-text" class="py-5 text-lg text-gray-800">Hello, my name is Jamie Davies, I'm 25 years old and a website developer. As a graduate with two years experience as a website assistant, I have been lucky enough to gain valuable experience working for an organisation, understanding how businesses work and how projects work within the working world. These projects have given me the opportunity to improve fundamental skills I acquired during my university studies and develop new skills. When I am not developing, I enjoy playing golf at my local course and gaming online with my friends. 
                </p>
            </div>
        </div>
        <x-scroll-chevron link="#skills-section" colour="#5923d6"></x-scroll-chevron>
    </div>
    <div id="skills-section-container" class="py-5">
        <div id="skills-section" class="items-center justify-between max-w-screen-xl mx-auto h-4/5 grid grid-cols-3 py-20">
            <div class="flex justify-center my-10">
                <div class="fadeInOnScroll bg-white p-20 rounded-full w-8/12 flex justify-center items-center">
                    <img class="h-32 growOnHover" src="/assets/html.svg" alt="HTML5 logo">
                </div>
            </div>
            <div class="flex justify-center my-10">
                <div class="fadeInOnScroll bg-white p-20 rounded-full w-8/12 flex justify-center items-center">
                    <img class="h-32 growOnHover" src="/assets/css3.svg" alt="CCS3 logo">
                </div>
            </div>
            <div class="flex justify-center my-10">
                <div class="fadeInOnScroll bg-white p-20 rounded-full w-8/12 flex justify-center items-center">
                    <img class="h-32 growOnHover" src="/assets/php-logo.svg" alt="PHP logo">
                </div>
            </div>
            <div class="flex justify-center my-10">
                <div class="fadeInOnScroll bg-white p-20 rounded-full w-8/12 flex justify-center items-center">
                    <img class="h-32 growOnHover" src="/assets/mysql-logo.svg" alt="MySQL logo">
                </div>
            </div>
            <div class="flex justify-center my-10">
                <div class="fadeInOnScroll bg-white p-20 rounded-full w-8/12 flex justify-center items-center">
                    <img class="h-32 growOnHover" src="/assets/javascript.jpg" alt="Javascript logo">
                </div>
            </div>
            <div class="flex justify-center my-10">
                <div class="fadeInOnScroll bg-white p-20 rounded-full w-8/12 flex justify-center items-center">
                    <img class="h-32 growOnHover" src="/assets/laravel.svg" alt="Laravel logo">
                </div>
            </div>
        </div>
        <x-scroll-chevron link="#contact-section" colour="white"></x-scroll-chevron>
    </div>
    <div id="contact-section-container" class="h-screen flex items-center bg-gray-50">
        <div id="contact-section" class="flex items-center justify-between max-w-screen-xl mx-auto h-3/4 bg-white shadow w-3/4">
            <div class="h-full w-1/2 p-10 flex items-center justify-center">
                <div class="w-1/2">
                    <img src="/assets/contact-img.svg" alt="Contact me image">
                </div>
            </div>
            <div id="contact-fill" class="h-full w-1/2 p-10 flex items-center justify-center">
                <div>
                    <h2 id="contact-header" class="text-white text-4xl mb-5 border-b border-gray-100 pb-4">I would love to hear from you!</h2>
                    <p class="mb-2 text-white">If you have any more questions then please contact me via any of my details below and I would love to chat with you!</p>
                    <p class="mb-10 text-white">Email: <a class="font-bold hover:text-black" href="mailto:tropicjam99@gmail.com">tropicjam99@gmail.com</a> <br> Mobile: (+44)7772276472</p>
                </div>
            </div>
        </div>
    </div>
@endsection