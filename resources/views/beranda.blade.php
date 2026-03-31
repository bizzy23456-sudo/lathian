@extends('layouts.app')

@section('content')

<style>
/* ===== HERO SLIDER ===== */
.hero {
    position: relative;
    height: 400px;
    overflow: hidden;
}

.slides {
    width: 100%;
    height: 100%;
    position: relative;
}

.slide {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: opacity 0.7s ease-in-out;
}

.slide.active {
    opacity: 1;
    z-index: 1;
}

/* overlay */
.hero::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.3);
    top: 0;
    left: 0;
    z-index: 2;
}

/* text */
.hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    z-index: 3;
}

.hero-text h1 {
    font-size: 42px;
    font-weight: bold;
}

.hero-text p {
    font-size: 18px;
}

/* tombol */
button.prev, button.next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.5);
    color: white;
    border: none;
    padding: 12px 15px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 50%;
    z-index: 4;
}

button.prev { left: 15px; }
button.next { right: 15px; }

button:hover {
    background: rgba(0,0,0,0.8);
}

/* ===== KEGIATAN ===== */
.judul-kegiatan {
    text-align: center;
    margin-top: 40px;
    margin-bottom: 30px;
    font-weight: bold;
}

/* wrapper card */
.card-wrapper {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: nowrap;
    overflow-x: auto;
    padding-bottom: 10px;
}

/* card */
.card-wrapper .card {
    min-width: 220px;
    max-width: 220px;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    background: white;
    transition: 0.3s;
}

/* gambar */
.card-wrapper .card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

/* isi */
.card-body {
    padding: 10px;
    text-align: center;
}

.card:hover {
    transform: translateY(-5px);
}

/* ===== ANIMASI ===== */
.animate {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease;
}

.animate.show {
    opacity: 1;
    transform: translateY(0);
}

/* delay animasi */
.card:nth-child(1) { transition-delay: 0.1s; }
.card:nth-child(2) { transition-delay: 0.2s; }
.card:nth-child(3) { transition-delay: 0.3s; }
.card:nth-child(4) { transition-delay: 0.4s; }
.card:nth-child(5) { transition-delay: 0.5s; }
</style>

<!-- ===== SLIDER ===== -->
<div class="hero">
    <div class="slides">
        <img src="{{ asset('images/slide1.jpeg') }}" class="slide active">
        <img src="{{ asset('images/slide2.jpeg') }}" class="slide">
        <img src="{{ asset('images/slide3.jpeg') }}" class="slide">
        <img src="{{ asset('images/slide4.jpeg') }}" class="slide">
    </div>

    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>

    <div class="hero-text">
        <h1>Selamat Datang</h1>
        <p>Website Asep DEVLIFE</p>
    </div>
</div>

<!-- ===== KEGIATAN ===== -->
<div class="container">

    <h2 class="judul-kegiatan animate">Kegiatan di Rumah</h2>
    
    <div class="card-wrapper">

        <div class="card animate">
            <img src="{{ asset('images/kegiatan1.jpeg') }}">
            <div class="card-body">
                <h5>Belajar Koding</h5>
                <p>Belajar membuat program dan coding setiap hari.</p>
            </div>
        </div>

        <div class="card animate">
            <img src="{{ asset('images/kegiatan2.jfif') }}">
            <div class="card-body">
                <h5>Membantu Orang Tua</h5>
                <p>Membantu orang tua membersihkan rumah.</p>
            </div>
        </div>

        <div class="card animate">
            <img src="{{ asset('images/kegiatan3.jfif') }}">
            <div class="card-body">
                <h5>Nyawit</h5>
                <p>Melaksanakan nyawit di rumah.</p>
            </div>
        </div>

        <div class="card animate">
            <img src="{{ asset('images/kegiatan4.jfif') }}">
            <div class="card-body">
                <h5>Itikaf di Masjid</h5>
                <p>Beribadah dan itikaf di masjid.</p>
            </div>
        </div>

        <div class="card animate">
            <img src="{{ asset('images/kegiatan5.jfif') }}">
            <div class="card-body">
                <h5>Tidur</h5>
                <p>Istirahat tidur di rumah.</p>
            </div>
        </div>

    </div>
</div>

<!-- ===== SCRIPT ===== -->
<script>
let index = 0;
const slides = document.querySelectorAll(".slide");

function showSlide(i) {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[i].classList.add("active");
}

document.querySelector(".next").addEventListener("click", () => {
    index = (index + 1) % slides.length;
    showSlide(index);
});

document.querySelector(".prev").addEventListener("click", () => {
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
});

// auto slide
setInterval(() => {
    index = (index + 1) % slides.length;
    showSlide(index);
}, 4000);

/* ===== ANIMASI SCROLL ===== */
const elements = document.querySelectorAll('.animate');

function revealOnScroll() {
    const windowHeight = window.innerHeight;

    elements.forEach((el) => {
        const elementTop = el.getBoundingClientRect().top;

        if (elementTop < windowHeight - 100) {
            el.classList.add('show');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);

// trigger awal
revealOnScroll();
</script>

@endsection