<?php
// Check if we should show loading screen
if (isset($_SESSION['show_loading'])) {
    header('Location: loading.php');
    exit;
}

session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: index.php');
    exit;
}

$page_title = "Our 4th Monthsary";
include('header.php');
?>

<div class="main-hero">
    <div class="purple-overlay"></div>
    <div class="container hero-content">
        <h1 class="display-3 text-white fw-bold">Happy 4th Monthsary</h1>
        <div class="heart-float">
            <div class="heart"></div>
            <div class="heart"></div>
            <div class="heart"></div>
        </div>
        <p class="lead text-white mt-3">Four months of wonderful memories with you 🥰</p>
        <a href="page2.php" class="btn btn-romantic mt-4">
            <span class="btn-text">Click this for the next page ^^</span>
            <span class="btn-heart">💜</span>
        </a>
    </div>
</div>

<div class="container py-5">
    <div class="countdown-box text-center p-4 mb-5">    
        <h3 class="text-purple">Our Time Together</h3>
        <div class="countdown-timer">
            <div class="countdown-item">
                <span id="months">4</span>
                <span>Months</span>
            </div>
            <div class="countdown-item">
                <span id="days">0</span>
                <span>Days</span>
            </div>
            <div class="countdown-item">
                <span id="hours">0</span>
                <span>Hours</span>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

