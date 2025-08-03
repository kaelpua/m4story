<?php
session_start();

// Check if PIN is correct
if (isset($_POST['pin'])) {
    if ($_POST['pin'] === '040825') {
        $_SESSION['authenticated'] = true;
        $_SESSION['show_loading'] = true;
        session_regenerate_id(true);
        header('Location: loading.php');
        exit;
    } else {
        $error = "Incorrect PIN, try again babyyy!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For My Love ❤️</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --purple-dark: #4b0082;
            --purple-primary: #800080;
            --purple-secondary: #9370db;
            --purple-light: #e6e6fa;
            --pink-accent: #ff69b4;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f9f0ff, #f0e0ff);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            border-top: 5px solid var(--purple-primary);
            transform: scale(0.95);
            transition: transform 0.3s ease;
        }

        .login-container:hover {
            transform: scale(1);
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--purple-primary), var(--pink-accent));
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            font-family: 'Brush Script MT', cursive;
            color: var(--purple-primary);
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .login-header p {
            color: var(--purple-secondary);
        }

        .heart-icon {
            color: var(--pink-accent);
            font-size: 2rem;
            margin-bottom: 15px;
            display: inline-block;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .form-control {
            border: 2px solid var(--purple-light);
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1.1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--purple-primary);
            box-shadow: 0 0 0 0.25rem rgba(128, 0, 128, 0.25);
        }

        .btn-login {
            background: linear-gradient(45deg, var(--purple-primary), var(--pink-accent));
            border: none;
            color: white;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.1rem;
            width: 100%;
            transition: all 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(128, 0, 128, 0.3);
        }

        .error-message {
            color: #dc3545;
            text-align: center;
            margin-top: 15px;
            font-weight: 500;
        }

        .floating-hearts {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: -1;
        }

        .heart {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: var(--pink-accent);
            transform: rotate(45deg);
            opacity: 0.7;
            animation: float 6s infinite ease-in-out;
        }

        .heart:before, .heart:after {
            content: '';
            width: 20px;
            height: 20px;
            background-color: var(--pink-accent);
            border-radius: 50%;
            position: absolute;
        }

        .heart:before {
            top: -10px;
            left: 0;
        }

        .heart:after {
            top: 0;
            left: -10px;
        }

        @keyframes float {
            0%, 100% { transform: rotate(45deg) translateY(0) translateX(0); }
            25% { transform: rotate(45deg) translateY(-20px) translateX(10px); }
            50% { transform: rotate(45deg) translateY(-10px) translateX(-10px); }
            75% { transform: rotate(45deg) translateY(-30px) translateX(0); }
        }
    </style>
</head>
<body>
    <div class="floating-hearts">
        <div class="heart" style="top:10%; left:15%; animation-delay:0s;"></div>
        <div class="heart" style="top:20%; left:80%; animation-delay:1s;"></div>
        <div class="heart" style="top:70%; left:10%; animation-delay:2s;"></div>
        <div class="heart" style="top:80%; left:70%; animation-delay:3s;"></div>
    </div>

    <div class="login-container">
        <div class="login-header">
            <div class="heart-icon">❤️</div>
            <h2>For My Babi</h2>
            <p>Enter our special date this year</p>
        </div>

        <form method="POST" action="">
            <div class="mb-3">
                <input type="password" class="form-control" name="pin" placeholder="Enter PIN" maxlength="6" inputmode="numeric" pattern="\d*" required>
            </div>
            <button type="submit" class="btn btn-login">Unlock</button>
            
            <?php if (isset($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>
        </form>
    </div>

    <script>
        document.querySelector('input[name="pin"]').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
</body>
</html>