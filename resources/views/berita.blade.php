@extends('layouts.app')

@section('content')

<style>
/* ===== MY PROJECT ===== */
.project-section {
    padding: 40px 0;
    text-align: center;
}

.project-section h2 {
    font-size: 36px;
    margin-bottom: 30px;
    font-weight: bold;
}

/* wrapper card */
.project-wrapper {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

/* card */
.project-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    width: 300px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.5s, box-shadow 0.5s, filter 0.5s;
    display: flex;
    flex-direction: column;

    /* awal animasi */
    opacity: 0;
    transform: translateY(40px);
}

/* gambar */
.project-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

/* body card */
.project-card .card-body {
    padding: 15px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.project-card h5 {
    margin: 0 0 10px 0;
    font-size: 20px;
    font-weight: bold;
}

.project-card p {
    font-size: 14px;
    margin-bottom: 15px;
    color: #555;
}

/* tombol link */
.project-card a {
    text-decoration: none;
    color: white;
    background: #15b0c4;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background 0.3s;
}

.project-card a:hover {
    background: #11cc40;
}

/* hover efek card */
.project-card:hover {
    transform: translateY(-10px) rotateX(3deg);
    box-shadow: 0 12px 25px rgba(0,0,0,0.25);
    filter: brightness(1.05);
}

/* efek muncul (scroll reveal) */
.project-card.show {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.7s ease-out;
}

/* delay animasi */
.project-card:nth-child(1) { transition-delay: 0.1s; }
.project-card:nth-child(2) { transition-delay: 0.3s; }
.project-card:nth-child(3) { transition-delay: 0.5s; }
</style>

<div class="project-section">
    <h2>My Project</h2>
    <div class="project-wrapper">
        <div class="project-card">
            <img src="{{ asset('images/project1.png') }}" alt="Project 1">
            <div class="card-body">
                <h5>Website TasbihDigital</h5>
                <p>Website tasbihdigital menggunakan HTML.</p>
                <a href="https://tasbih-digital-seven.vercel.app/" target="_blank">Lihat Project</a>
            </div>
        </div>

        <div class="project-card">
            <img src="{{ asset('images/project2.png') }}" alt="Project 2">
            <div class="card-body">
                <h5>Website ucapan lebaran</h5>
                <p>website ucapan lebaran mengunakan html,css dan javascript.</p>
                <a href="https://ucapan-selamat-idulfitri-4xtx.vercel.app/home.html" target="_blank">Lihat Project</a>
            </div>
        </div>

        <div class="project-card">
    <video src="{{ asset('images/project3.mp4') }}" 
           autoplay muted loop playsinline
           style="width: 100%; height: 180px; object-fit: cover; border-bottom:1px solid #ddd;">
        Your browser does not support the video tag.
    </video>
    <div class="card-body">
        <h5>Website Portofolio</h5>
        <p>mohon maaf website portofolio masih blom di hosting.</p>
        <a href="https://github.com/username/project3" target="_blank">Lihat Project</a>
    </div>
</div>

<script>
// ===== SCROLL ANIMASI =====
const projectCards = document.querySelectorAll('.project-card');

function revealProjects() {
    const windowHeight = window.innerHeight;

    projectCards.forEach(card => {
        const cardTop = card.getBoundingClientRect().top;
        if(cardTop < windowHeight - 100) {
            card.classList.add('show');
        }
    });
}

window.addEventListener('scroll', revealProjects);
window.addEventListener('load', revealProjects);
</script>

@endsection