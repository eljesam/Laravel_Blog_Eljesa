@extends('layouts.app')

@section('content')

    <div class="heading">
        <h1>Who am I?</h1>
        <p>
            Hi! I'm Ellie and I do nails!
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

                    I am a qualified nail technician and I have a passion for nails.
                    I am here to teach you all about your nails and how to keep them healthy.
                    Stay tuned for my blog posts and tutorials!
                </p>
            </div>
        </section>
    </div>
    <div class="text-center p-15 bg-gray-900 text-white">
        <h2 class="text-2xl pb-5 text-l">
          Some helpful videos
        </h2>

    </div>

    <div class="video-container">
        <div class="video1">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/3ZlDZPYzfm4?si=3ZlDZPYzfm4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <div class="video2">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/c3jXG8KR48U?si=UY2pPYrHS7xTxcRq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
</div>
    <div class="social-icons">
        <a href="https://www.instagram.com/ellie_nailzzzz/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/your_facebook_profile" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.youtube.com/@NailCareerEducation" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>
@endsection