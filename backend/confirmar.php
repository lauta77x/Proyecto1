<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Confirmar</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        #modal {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #contenidoModal {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            width: 90%;
            max-width: 400px;
            padding: 40px;
            text-align: center;
            color: white;
        }

        .fa-circle-check {
            color: #4CAF50;
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .mensaje-error {
            color: white;
            font-weight: 600;
            font-size: 18px;
            margin-top: 20px;
        }

        #contenidoModal:hover {
            transform: translateY(-2px);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body>
    <a href="index.html">
        <div id="modal">
            <div id="contenidoModal">
                <i class="fa-regular fa-circle-check"></i>
                <div class="mensaje-error">
                    Usuario registrado exitosamente
                </div>
            </div>
        </div>
    </a>
</body>
</html>