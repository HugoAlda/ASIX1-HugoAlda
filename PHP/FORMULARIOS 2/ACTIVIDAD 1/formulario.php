<title>Actividad 7-1 - Calculadora de newsletter</title>
<style>

    table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    thead {
        background-color: #007bff;
        color: white;
    }

    th, td {
        border: 1px solid #dddddd;
        padding: 10px;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

</style>

<h1><u>Precios de envio de mensajes</u></h1>

<table>
    <thead>
        <tr>
            <th>De</th>
            <th>A</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td>2000</td>
            <td>0 €</td>
        </tr>
        <tr>
            <td>2001</td>
            <td>10000</td>
            <td>0.7 € unidad</td>
        </tr>
        <tr>
            <td>10001</td>
            <td>Infinito</td>
            <td>0.2 € unidad</td>
        </tr>
    </tbody>
</table>
<br>
<form action="recibir.php" method="post">
    <label>Cuantos mensajes quieres enviar: </label>
    <input type="number" name="num-msg">
    <br><br>
    <label>Quieres usar el seguro para los mensajes: </label>
    <select name="opcion" required>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select>


    <input type="submit" name="btn" value="Enviar">
</form>