<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inversión</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="contenedor">
        <div class="grupo-entrada">
            <label class="etiqueta">Ingresa el monto a invertir</label>
            <div class="envoltura-entrada">
                <span class="simbolo-moneda">$</span>
                <input type="text" class="entrada-monto" value="0">
            </div>
            <p class="texto-ayuda">Podrás invertir entre $500 y $100,000,000</p>
        </div>

        <div class="grupo-entrada">
            <label class="etiqueta">Selecciona el tipo de plazo</label>
            <div class="grupo-botones">
                <button class="boton-plazo">Meses</button>
                <button class="boton-plazo activo">Días</button>
            </div>
        </div>

        <div class="opciones-plazo">
            <label class="etiqueta">Elige el plazo en días de tu inversión</label>
            <div class="grupo-plazos">
                <button class="boton-plazo">91</button>
                <button class="boton-plazo activo">61</button>
                <button class="boton-plazo">31</button>
                <button class="boton-plazo otro">Otro plazo ✏️</button>
            </div>
        </div>

        <div class="info-resultados">
            <div class="fila-resultado">
                <span>En x días recibirás:</span>
                <span>$ 0</span>
            </div>
            <div class="fila-resultado">
                <span>Con un interés de:</span>
                <span class="tasa-interes">0%</span>
            </div>
        </div>

        <button class="boton-invertir">Invertir ahora</button>
    </div>
</body>
</html>
