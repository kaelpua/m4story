// Add at the start of your JS
window.addEventListener('load', function() {
    const loader = document.querySelector('.loading-screen');
    setTimeout(() => {
        loader.style.opacity = '0';
        setTimeout(() => loader.remove(), 500);
    }, 1000);
});

// Timeline animation on scroll
function checkTimeline() {
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    timelineItems.forEach(item => {
        const itemTop = item.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (itemTop < windowHeight * 0.75) {
            item.classList.add('visible');
        }
    });
}

// Run on load and scroll
window.addEventListener('load', checkTimeline);
window.addEventListener('scroll', checkTimeline);

document.addEventListener('DOMContentLoaded', function() {
    // Gift box interaction
    const giftBox = document.getElementById('giftBox');
    const giftMessage = document.getElementById('giftMessage');
    
    if (giftBox) {
        giftBox.addEventListener('click', function() {
            // Add open class to trigger CSS animation
            this.classList.add('open');
            
            // Create sparkle effects
            createSparkles(this);
            
            // Show gift message after animation completes
            setTimeout(() => {
                giftMessage.classList.add('show');
                createConfetti();
                
                // Generate or reveal the Roblox code
                revealRobloxCode();
            }, 1000);
        });
    }
    
    // Copy button functionality
    const copyBtn = document.getElementById('copyBtn');
    if (copyBtn) {
        copyBtn.addEventListener('click', function() {
            const code = document.getElementById('robloxCode').textContent;
            navigator.clipboard.writeText(code).then(() => {
                this.textContent = 'Copied!';
                setTimeout(() => {
                    this.textContent = 'Copy';
                }, 2000);
            });
        });
    }
    
    // Create sparkle effects
    function createSparkles(container) {
        const sparkles = container.querySelectorAll('.sparkle');
        sparkles.forEach(sparkle => {
            sparkle.style.left = `${Math.random() * 100}%`;
            sparkle.style.top = `${Math.random() * 100}%`;
            sparkle.style.opacity = '1';
            sparkle.style.transform = 'scale(1)';
            
            setTimeout(() => {
                sparkle.style.opacity = '0';
                sparkle.style.transform = 'scale(0)';
            }, 500);
        });
    }
    
    // Create confetti effect
    function createConfetti() {
        const confettiContainer = document.querySelector('.confetti');
        if (!confettiContainer) return;
        
        confettiContainer.innerHTML = '';
        
        for (let i = 0; i < 50; i++) {
            const confetti = document.createElement('div');
            confetti.className = 'confetti-piece';
            confetti.style.left = `${Math.random() * 100}%`;
            confetti.style.backgroundColor = getRandomColor();
            confetti.style.animation = `fall ${Math.random() * 3 + 2}s linear forwards`;
            confettiContainer.appendChild(confetti);
        }
    }
    
    // Helper function for random colors
    function getRandomColor() {
        const colors = ['#ff69b4', '#9370db', '#800080', '#4b0082', '#ff1493', '#da70d6'];
        return colors[Math.floor(Math.random() * colors.length)];
    }
    
    // Reveal the Roblox code
    function revealRobloxCode() {
        // Replace with your actual Roblox code
        const codePrefix = "www.roblox.com/redeem";
        document.getElementById('robloxCode').textContent = codePrefix;
    }
});

