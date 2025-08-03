<?php
session_start();
if (!isset($_SESSION['show_loading'])) {
    header('Location: index.php');
    exit;
}
unset($_SESSION['show_loading']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Loading Our Love...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @font-face {
            font-family: 'Minecraft';
            src: url('font/minecraft.ttf') format('truetype');
        }
        
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #000;
            height: 100vh;
            touch-action: manipulation;
        }
        
        #message-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .love-message {
            position: absolute;
            font-family: 'Minecraft', sans-serif;
            font-size: clamp(24px, 7vw, 36px); /* Increased font size */
            opacity: 0;
            animation: float linear forwards;
            white-space: nowrap;
            transform: translateX(-50%);
            will-change: transform, opacity;
            user-select: none;
            pointer-events: none;
            
            /* Enhanced text outline with glow */
            color: var(--text-color, #FFFFFF);
            text-shadow: 
                -2px -2px 0 #000,
                2px -2px 0 #000,
                -2px 2px 0 #000,
                2px 2px 0 #000,
                0 0 12px var(--text-color); /* Stronger glow */
            
            /* Smooth black outline */
            -webkit-text-stroke: 1.5px #000;
            paint-order: stroke fill;
            
            /* Better text rendering */
            text-rendering: optimizeLegibility;
        }
        
        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(-50%);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-20vh) translateX(-50%);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div id="message-container"></div>

    <script>
        // Messages array
        const messages = [
            "I love you, Lesley", "ILY, Lesley", "I♥U, babi", "I heart you",
            "Honeyyy", "My Lesley", "Best GF ever", "Wifeyyy", "You're amazing",
            "Cutie pie", "My babyyy", "Sweetie", "Adore you", "My everything",
            "Beautiful", "Pretty", "Darling", "Sweetheart", "Cupcake", "Babi",
            "Loveyyy", "Snugbeam", "My fav person", "My happy pill", "Love",
            "Soulmate", "Sexyyy", "Better half", "My joy", "Treasure",
            "My happiness", "Sugar", "Amazing", "Pumpkin", "Sunshine",
            "Moonlight", "Starlight", "Bub", "Beloved", "Bubbly"
        ];
        
        // Vibrant colors array
        const colors = [
            "#FF5555", "#55FF55", "#5555FF", "#FFFF55", "#FF55FF", "#55FFFF",
            "#FFAA00", "#AA00FF", "#00FFAA", "#FF0055", "#55FF00", "#0055FF",
            "#FF00AA", "#AAFF00", "#00AAFF", "#FF5500", "#5500FF", "#00FF55"
        ];
        
        // Configuration
        const config = {
            initialCount: 15,
            spawnRate: 300,
            minDuration: 6,
            maxDuration: 9,
            minDelay: 0,
            maxDelay: 3,
            leftMargin: 15,
            rightMargin: 85
        };
        
        // Create staggered initial messages
        function createInitialMessages() {
            for (let i = 0; i < config.initialCount; i++) {
                setTimeout(() => {
                    createMessage();
                }, i * (config.maxDelay * 1000 / config.initialCount));
            }
        }
        
        // Create a single message
        function createMessage() {
            const msg = document.createElement('div');
            msg.className = 'love-message';
            msg.textContent = messages[Math.floor(Math.random() * messages.length)];
            
            // Set random color
            const color = colors[Math.floor(Math.random() * colors.length)];
            msg.style.setProperty('--text-color', color);
            
            // Random position with margins
            const leftPos = config.leftMargin + 
                Math.random() * (config.rightMargin - config.leftMargin);
            msg.style.left = `${leftPos}%`;
            
            // Random duration
            const duration = config.minDuration + 
                Math.random() * (config.maxDuration - config.minDuration);
            msg.style.animationDuration = `${duration}s`;
            
            document.getElementById('message-container').appendChild(msg);
            
            // Auto-remove after animation
            setTimeout(() => msg.remove(), duration * 1000);
        }
        
        // Initialize with staggered messages
        createInitialMessages();
        
        // Continuous message creation
        const spawnInterval = setInterval(createMessage, config.spawnRate);
        
        // Redirect after 20 seconds
        setTimeout(() => {
            clearInterval(spawnInterval);
            window.location.href = "page1.php";
        }, 20000);
        
        // Handle orientation changes
        window.addEventListener('orientationchange', () => {
            window.location.reload();
        });
    </script>
</body>
</html>