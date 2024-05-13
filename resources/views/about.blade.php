@extends('layouts.app')

@section('content')

    <div class="heading">
        <h1>Who am I?</h1>
        <p>
        Hi! I'm Ellie!
        </p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="images/me.jpg" alt="Ellie">
            </div>
            <div class="about-content">
                <h2>About me</h2>
                <p>I am a Bachelor's student at DkIT, studying Computing in Software Development.
                    I have been doing nails for 3 years now and I love it.

                   I have started reading books when I was 5 years old and I have been reading ever since.
                     I have a passion for reading and I love to share my thoughts on books with others.

                </p>
            </div>
        </section>
    </div>
    <div class="text-center p-15 bg-gray-900 text-white">
        <h2 class="text-2xl pb-5 text-l">
          Some helpful videos
        </h2>

    </div>

   
    <div class="social-icons">
        <a href="https://www.instagram.com/ellie_nailzzzz/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/your_facebook_profile" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.youtube.com/@NailCareerEducation" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>
@endsection