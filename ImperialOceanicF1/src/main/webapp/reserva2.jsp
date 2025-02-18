<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva tu Crucero</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .hero {
            background: url('https://www.travelandtourworld.com/wp-content/uploads/2024/12/cruise-ships1-1.jpg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            border-radius: 0;
        }

        .hero h1 {
            background-color: #0056b3;
            padding: 20px;
            border-radius: 5px;
            font-size: 2rem;
            border-radius: 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo img {
            height: 50px;
            width: auto;
        }

        .sticky-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: transparent;
            padding: 10px 20px;
            z-index: 1000;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            margin: 0 auto;
            max-width: 750px;
            position: relative;
            top: -100PX;
            z-index: 1;
        }

        .separator {
            border: 0;
            height: 5px;
            background-color: #0056b3;
            width: 105%;
            margin: 10px 0;
        }

        .form-section {
            flex: 1;
            margin: 0 10px;
            background-color: #002f5f;
            padding: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .form-section h3 {
            margin: 0;
            font-size: 1.2rem;
            line-height: 1.75;
        }

        .submit-btn {
            padding: 15px 10px;
            background-color: #0056b3;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            width: 300px;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: #003d80;
        }

        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
            }

            .form-section {
                margin: 10px 0;
            }
        }

    </style>
</head>
<body>
    <header id="cabecera" class="sticky-header">
      <div class="logo">
        <a href="index.php"><img src="image/logon.png" alt="Logo"></a>
      </div>
    </header>
    <div class="hero">
        <h1>Confirmacion de reserva</h1>
    </div>

    <div class="form-container">
        <div class="form-section">
            <h3>¡Gracias por reservar con Imperial Oceanico!</h3>
            <h3>Recibiras un correo con los detalles de tu viaje.</h3>
            <hr class="separator">
            <a href="index.php">
    			<button class="submit-btn">DESCARGAR TICKET</button>
			</a>
        </div>
    </div>
</body>
</html>
