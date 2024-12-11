<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Préstamos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="prestamo.css">
</head>

<body>
    <div class="container">
    <div class="profile-box">
    <div class="profile">
        <img src="img/PERFIL.jpeg" alt="Foto de perfil">
        <div class="profile-info">
            <span><strong>Nombre:</strong> Juan Pérez</span>
            <span><strong>ID:</strong> 123456</span>
            <span><strong>Correo:</strong> juan@example.com</span>
            <span><strong>Saldo disponible:</strong> S/. 3000</span>
        </div>
        <div class="cerrar-sesion-box">
    <a href="CerrarSesion.php" class="btn-cerrar">Cerrar sesión</a>
</div>

    </div>
</div>


        <h1>Sistema de Préstamos</h1>

        <div class="loan-form">
            <h2>Solicitar Préstamo</h2>
            <form id="loanForm" method="POST" action="guardar_prestamo.php">
    <!-- Monto a solicitar -->
    <label for="monto">Monto a solicitar</label>
    <select id="monto" name="monto" required>
        <option value="500">500 soles (12% de interés)</option>
        <option value="100">100 soles (15% de interés)</option>
        <option value="1250">1250 soles (18% de interés)</option>
        <option value="1500">1500 soles (20% de interés)</option>
        <option value="2000">2000 soles (18% de interés)</option>
        <option value="2500">2500 soles (14% de interés)</option>
        <option value="3000">3000 soles (15% de interés)</option>
        <option value="4000">4000 soles (17% de interés)</option>
        <option value="5000">5000 soles (22% de interés)</option>
        <option value="10000">10000 soles (28% de interés)</option>
    </select>

    <!-- Plazo de pago -->
    <label for="plazo">Plazo de pago</label>
    <select id="plazo" name="plazo" required>
        <option value="3">3 meses</option>
        <option value="6">6 meses</option>
        <option value="9">9 meses</option>
        <option value="12">12 meses</option>
    </select>

    <!-- Tipo de préstamo -->
    <label for="tipo">Tipo de préstamo</label>
    <input type="text" id="tipo" name="tipo" placeholder="Escribe el tipo de préstamo" required />

    <!-- Detalle de préstamo -->
    <div id="loanDetails" class="loan-details">
        <p><strong>Duración del préstamo:</strong> <span id="duration">0</span> meses</p>
        <p><strong>Interés:</strong> <span id="interest">0%</span></p>
        <p><strong>Cuota mensual:</strong> S/. <span id="monthlyPayment">0</span></p>
        <p><strong>Total a pagar:</strong> S/. <span id="totalAmount">0</span></p>
    </div>

    <h2>Detalles Adicionales</h2>
    <input type="text" id="firstName" name="firstName" placeholder="Nombre" required />
    <input type="text" id="lastName" name="lastName" placeholder="Apellido" required />
    <input type="text" id="dni" name="dni" placeholder="DNI" required />
    <input type="text" id="address" name="address" placeholder="Lugar donde vive" required />
    <input type="text" id="workplace" name="workplace" placeholder="Lugar donde trabaja" required />
    <input type="text" id="school" name="school" placeholder="Lugar donde estudia" required />
    <input type="tel" id="phone1" name="phone1" placeholder="Número celular 1" required />
    <input type="tel" id="phone2" name="phone2" placeholder="Número celular 2" required />
    <textarea id="referral" name="referral" placeholder="Referencia de una persona" required></textarea>

    <button type="submit">Solicitar Préstamo</button>
    <input type="hidden" id="interestValue" name="interest">
<input type="hidden" id="monthlyPaymentValue" name="monthlyPayment">
<input type="hidden" id="totalAmountValue" name="totalAmount">

</form>

        </div>

        <button id="generatePDFBtn" onclick="generatePDF()">Generar PDF</button>
    </div>

    <script>
        // Función para generar detalles del préstamo
        function generateLoanDetails() {
    const monto = parseFloat(document.getElementById('monto').value);
    const plazo = parseInt(document.getElementById('plazo').value);
    const tipo = document.getElementById('tipo').value;

    let interestRate;
    switch (monto) {
        case 500:
            interestRate = 12;
            break;
        case 100:
            interestRate = 15;
            break;
        case 1250:
            interestRate = 18;
            break;
        case 1500:
            interestRate = 20;
            break;
        case 2000:
            interestRate = 18;
            break;
        case 2500:
            interestRate = 14;
            break;
        case 3000:
            interestRate = 15;
            break;
        case 4000:
            interestRate = 17;
            break;
        case 5000:
            interestRate = 22;
            break;
        case 10000:
            interestRate = 28;
            break;
        default:
            interestRate = 0;
            break;
    }

    const totalAmount = monto + (monto * (interestRate / 100));
    const monthlyPayment = totalAmount / plazo;

    // Mostrar los detalles en la interfaz
    document.getElementById('interest').textContent = `${interestRate}%`;
    document.getElementById('duration').textContent = plazo;
    document.getElementById('monthlyPayment').textContent = monthlyPayment.toFixed(2);
    document.getElementById('totalAmount').textContent = totalAmount.toFixed(2);

    // Asignar los valores a los campos ocultos
    document.getElementById('interestValue').value = interestRate;
    document.getElementById('monthlyPaymentValue').value = monthlyPayment.toFixed(2);
    document.getElementById('totalAmountValue').value = totalAmount.toFixed(2);
}


// Agregar event listeners para actualizar los detalles cuando se cambian los valores
document.getElementById('monto').addEventListener('change', generateLoanDetails);
document.getElementById('plazo').addEventListener('change', generateLoanDetails);


        // Función para generar PDF
        function generatePDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            doc.text("Solicitud de Préstamo", 20, 10);
            doc.text("Nombre: " + document.querySelector(".profile-info span:nth-child(1)").textContent.split(":")[1].trim(), 20, 20);
            doc.text("Monto Solicitado: " + document.getElementById('monto').value, 20, 30);
            doc.text("Tipo de préstamo: " + document.getElementById('tipo').value, 20, 40);
            doc.text("Plazo: " + document.getElementById('plazo').value + " meses", 20, 50);
            doc.text("Interés: " + document.getElementById('interest').textContent, 20, 60);
            doc.text("Cuota mensual: S/. " + document.getElementById('monthlyPayment').textContent, 20, 70);
            doc.text("Total a pagar: S/. " + document.getElementById('totalAmount').textContent, 20, 80);
            doc.text("Detalles adicionales:", 20, 90);
            doc.text("Nombre: " + document.getElementById('firstName').value, 20, 100);
            doc.text("Apellido: " + document.getElementById('lastName').value, 20, 110);
            doc.text("DNI: " + document.getElementById('dni').value, 20, 120);
            doc.text("Lugar de residencia: " + document.getElementById('address').value, 20, 130);
            doc.text("Lugar de trabajo: " + document.getElementById('workplace').value, 20, 140);
            doc.text("Lugar de estudio: " + document.getElementById('school').value, 20, 150);
            doc.text("Teléfono 1: " + document.getElementById('phone1').value, 20, 160);
            doc.text("Teléfono 2: " + document.getElementById('phone2').value, 20, 170);
            doc.text("Referencia: " + document.getElementById('referral').value, 20, 180);
            
            doc.save("solicitud_prestamo.pdf");
        }
    </script>
</body>

</html>
