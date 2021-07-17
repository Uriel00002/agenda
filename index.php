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
        </div>
        <div class="campo enviar">
                <input type="submit" value="añadir">
        </div>
    </form>
</div>

<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor-contactos">
        <h2>Contactos</h2>
        <input type="text" id="buscar"  class="buscador sombra" placeholder="Buscar Contactos....">
    
        <p class="total-contactos">  <span>   2   </span> Contactos </p>

        <div class="contenedor-tabla">
            <table id="Listado-contactos"> 
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Uriel</td>
                        <td>pepes inc</td>
                        <td>1242342342</td>
                        <td>
                            <a class="btn-editar btn" href="#">
                                <i class="fas fa-pen-square"></i>
                            </a>

                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>Uriel</td>
                        <td>pepes inc</td>
                        <td>1242342342</td>
                        <td>
                            <a class="btn-editar btn" href="#">
                                <i class="fas fa-pen-square"></i>
                            </a>

                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>Uriel</td>
                        <td>pepes inc</td>
                        <td>1242342342</td>
                        <td>
                            <a class="btn-editar btn" href="#">
                                <i class="fas fa-pen-square"></i>
                            </a>

                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>

                
            </table>
        </div>

    </div>
</div>
<?php include 'inc/layout/footer.php'; ?>