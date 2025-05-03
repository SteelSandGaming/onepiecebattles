<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnePieceBattles.org - Coming Soon</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Pirata One', cursive;
            background: #fefdec;
            color: #f8d27d;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .container {
            max-width: 800px;
            padding: 0.5rem;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        @media (min-width: 1024px) {
            body {
                height: 100vh;
                overflow: hidden;
            }
            
            .container {
                height: 100vh;
            }
        }

        .logo {
            max-width: 60%;
            height: auto;
            margin: 0.5rem 0;
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-size: 2.5rem;
            color: #f8d27d;
            margin: 0.5rem 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.2rem;
            color: #d8c5a1;
            margin: 0.5rem 0;
        }

        footer {
            width: 100%;
            padding: 0.5rem;
            color: #cbbfa3;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('mainwhite.png') }}" alt="One Piece Battles Logo" class="logo">
        <div class="content">
            <h1>Coming Soon</h1>
            <p>We're preparing something special for all One Piece TCG enthusiasts!</p>
        </div>
        <footer>
            &copy; 2025 OnePieceBattles.org. All rights reserved.
        </footer>
    </div>
</body>
</html> 