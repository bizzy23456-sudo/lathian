@extends('layouts.app')

@section('content')

<style>
/* ===== PROFILE ===== */
.profile-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 40px 20px;
    gap: 30px;
}

.profile-left {
    flex: 1;
    text-align: center;
}

.profile-left img {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
}

.profile-right {
    flex: 2;
    text-align: left;
}

.profile-right h2 {
    font-size: 36px;
    margin: 0;
    font-weight: bold;
    color: #333;
}

.profile-right p {
    font-size: 18px;
    color: #555;
}

.skill-container {
    font-size: 22px;
    font-weight: bold;
    color: #15b0c4;
    margin-top: 20px;
    white-space: nowrap; /* Supaya tidak terputus saat mengetik */
}

/* Efek typing animation */
@keyframes typing {
    0% { width: 0; }
    50% { width: 100%; }
    100% { width: 100%; }
}

@keyframes blink {
    50% { border-color: transparent; }
}

/* Skill typing effect */
#skills {
    display: inline-block;
    overflow: hidden;
    border-right: 3px solid #15b0c4;
    width: 0;
    animation: typing 3s steps(30) 1s forwards, blink 0.75s step-end infinite;
}
</style>

<!-- PROFILE CONTENT -->
<div class="profile-container">
    <!-- LEFT: PHOTO -->
    <div class="profile-left">
        <img src="{{ asset('images/foto.jpeg') }}" alt="Foto Saya">
    </div>

    <!-- RIGHT: NAME, SKILLS -->
    <div class="profile-right">
        <h2>Al BAZZI ABDILLAH (Asep DevLife)</h2>
        <p>Selamat hari raya idul fittri 1447 H</p>

        <div class="skill-container">
            <span id="skills"></span>
        </div>
    </div>
</div>

<script>
// ===== ANIMASI TYPING =====
const skills = [
    "minal aidizn walfaidizin ", 
    "Mohon maaf lahir dan batin", 
    "takoballahu minna waminkum", 
    "semoga allah paring", 
    "lancar dan barokah", 
];

let currentSkill = 0;
const skillElement = document.getElementById("skills");

function typeSkill() {
    skillElement.textContent = ""; // Clear previous text
    const skill = skills[currentSkill];
    let index = 0;

    const typingInterval = setInterval(() => {
        skillElement.textContent += skill[index];
        index++;

        if (index === skill.length) {
            clearInterval(typingInterval);
            setTimeout(() => {
                currentSkill = (currentSkill + 1) % skills.length;
                typeSkill(); // Call the function again for the next skill
            }, 1500); // Wait 1.5 seconds before switching to the next skill
        }
    }, 150); // Speed of typing (characters per second)
}

typeSkill(); // Start typing animation on page load
</script>

@endsection