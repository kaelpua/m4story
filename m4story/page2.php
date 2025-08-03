<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: index.php');
    exit;
}

$page_title = "Our Memories";
include('header.php');
?>

<div class="memory-lane">
    <div class="container py-5">
        <h1 class="text-center fancy-title mb-5">Our Memory Lane</h1>
        
        <div class="timeline">
            <div class="timeline-item left">
                <div class="timeline-content">
                    <h3>First Date</h3>
                    <p>Remember when we first met? That magical moment when everything changed.</p>
                    <div class="timeline-date">Month 1</div>
                </div>
            </div>
            
            <div class="timeline-item right">
                <div class="timeline-content">
                    <h3>First Kiss</h3>
                    <p>That nervous but wonderful moment we shared our first kiss.</p>
                    <div class="timeline-date">Month 2</div>
                </div>
            </div>
            
            <div class="timeline-item left">
                <div class="timeline-content">
                    <h3>Special Trip</h3>
                    <p>Our adventure together that brought us even closer.</p>
                    <div class="timeline-date">Month 3</div>
                </div>
            </div>
            
            <div class="timeline-item right">
                <div class="timeline-content">
                    <h3>Today</h3>
                    <p>Celebrating 4 months of love, laughter, and happiness together.</p>
                    <div class="timeline-date">Month 4</div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="index.php" class="btn btn-outline-romantic mx-2">Previous</a>
            <a href="page3.php" class="btn btn-romantic mx-2">Next 💜</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>