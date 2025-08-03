<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header('Location: index.php');
    exit;
}

$page_title = "Your Gift";
include('header.php');
?>

<div class="gift-section">
    <div class="container py-5 text-center">
        <h1 class="fancy-title mb-4">Here's A Super Simple Gift For You po</h1>
        <p class="lead mb-5">For making these 4 months the happiest of my life hehe</p>
        
        <div class="gift-wrapper">
            <div class="gift-box" id="giftBox">
                <div class="box">
                    <div class="box-lid"></div>
                    <div class="box-body"></div>
                    <div class="box-bow"></div>
                    <div class="box-tag">Click Me</div>
                </div>
                <div class="sparkles">
                    <div class="sparkle"></div>
                    <div class="sparkle"></div>
                    <div class="sparkle"></div>
                </div>
            </div>
            
            <div class="gift-message mt-5" id="giftMessage">
                <div class="gift-card">
                    <h3 class="text-purple">Tadaaaa!</h3>
                    <div class="code-container">
                        <div class="code-display" id="robloxCode">www.roblox.com/redeems</div>
                        <button class="btn btn-copy" id="copyBtn">Copy</button>
                    </div>
                    <p class="redeem-instructions text-start mt-3">1. Go ka po sa site na yan, safe po yan dw</p>
                    <p class="redeem-instructions text-start">2. Log in mo po account mo po hehe</p>
                    <p class="redeem-instructions text-start">3. Copy mo po yung latest na naka pin sa inbox natin po, then paste mo po sa code sa website</p>
                    <p class="redeem-instructions text-start">4. Check mo na po game mo po hehe</p>
                    <div class="confetti"></div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="page3.php" class="btn btn-outline-romantic">Previous</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?> 