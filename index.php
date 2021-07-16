<?php include 'inc/layout/header.php'; ?>

<div class="contenedor-barra">
    <h1>  Agenda de contactos </h1> 
</div>

<div class="bg-amarillo contenedor sombra">
    <form id="contacto" action="#">
        <leyend>Añada un contacto<span>Todos los campos son abligatorios</span>
        </leyend>

        <div class="campos">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="nombre contacto" id="nombre">
            </div>
            <div class="campo">
                <label for="empresa">Empresa:</label>
                <input type="text" placeholder="nombre Empresa" id="empresa">
            </div>
            <div class="campo">
                <label for="telefono">Telefono:</label>
                <input type="tel" placeholder="nombre contacto" id="telefono">
            </div>
            <div class="campo enviar">
                <input type="submit" value="añadir">
            </div>
        </div>
    </form>
</div>

<?php include 'inc/layout/footer.php'; ?>