<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: index.php');
    exit;
}

$page_title = "Love Letter";
include('header.php');
?>

<div class="love-letter-section">
    <div class="container py-5">
        <div class="letter-container">
            <div class="letter-paper">
                <div class="letter-content">
                    <div class="letter-header">
                        <h2 class="fancy-title">To My Babi</h2>
                        <div class="letter-date">08 August 2025</div>
                    </div>
                    
                    <div class="letter-body">
                        <p>Dear Lesley,</p>
                        
                        <p>As I sit here thinking about us, my heart fills with so much joy and love. These past four months with you have been nothing short of amazing.</p>
                        
                        <p>I love the way you [personal quality 1], how you [personal quality 2], and especially how you [personal quality 3]. Every moment with you feels special, whether we're [activity you enjoy together] or just [simple activity you do together].</p>
                        
                        <p>You've brought so much happiness into my life, and I can't wait to create many more memories with you. Here's to us, and to many more months (and years!) of love.</p>
                        
                        <p>Faithfully yours,</p>
                        <p class="signature">Karel</p>
                    </div>
                </div>
            </div>
            
            <div class="letter-seal">
                <div class="seal"></div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="page2.php" class="btn btn-outline-romantic mx-2">Previous</a>
            <a href="page4.php" class="btn btn-romantic mx-2">Next? 👀</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>