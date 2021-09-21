<?php 
    include("conexion.php");
    

$id=$_GET['id'];

$sql="SELECT * FROM persona_fisica WHERE id='$id'";
$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar datos cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="up_clien_fisc_DB.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                
                                <select name="tipoid" id="selectSm" class="form-control-sm form-control" <?php echo $row["Tipo_Identificacion"] ?>>
                                        
                                        <isset <?php echo $row["Tipo_Identificacion"] ?>>
                                        <option ></option>
                                        <option value="Fisíca Nacional">Fisíca Nacional</option>
                                        <option value="DIMEX">DIMEX</option>
                                        <option value="NITE">NITE</option>
                                    </select>
                                   
                                    

                                <input type="text" class="form-control mb-3" name="cedula" placeholder="Cédula de identidad *" value="<?php echo $row["Cedula"] ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre *" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="ape1" placeholder="Primer Apellido *" value="<?php echo $row['Primer_Apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="ape2" placeholder="Segundo Apellido *" value="<?php echo $row['Segundo_Apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad *" value="<?php echo $row['Edad']  ?>">
                                
                                <select name="genero" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Genero</option>
                                        <option value="Hombre">HOMBRE</option>
                                        <option value="Mujer">MUJER</option>
                                        <option value="Indefinido">INDEFINIDO</option>
                                    </select>

                                    <select name="estado" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Estado Civíl</option>
                                        <option value="Soltero(a)">Soltero(a)</option>
                                        <option value="Casado(a)">Casado(a)</option>
                                        <option value="Divorciado(a)">Divorciado(a)</option>
                                        <option value="Unión Libre">Unión Libre</option>
                                        <option value="Viudo(a)">Viudo(a)</option>
                                    </select>
                                

                                    <p>Fecha de Nacimiento *</p>
                                    <input type="date" name="fecha" class="form-control" placeholder="Fecha de Nacimiento *" value="" />


                                    
                                <input type="text" class="form-control mb-3" name="nacionalidad" placeholder="Nacionalidad *" value="<?php echo $row['dni']  ?>">
                                
                                
                                <select name="provinvia" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Provincia</option>
                                        <option value="San José">San José</option>
                                        <option value="Alajuela">Alajuela</option>
                                        <option value="Heredia">Heredia</option>
                                        <option value="Cartago">Cartago</option>
                                        <option value="Guanacaste">Guanacaste</option>
                                        <option value="Puntarenas">Puntarenas</option>
                                        <option value="Limón">Limón</option>
                                    </select>
                                
                                <input type="text" class="form-control mb-3" name="canton" placeholder="Cantón*" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="distrito" placeholder="Distrito*" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="barrio" placeholder="Barrio*" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="señas" placeholder="Otras Señas*" value="<?php echo $row['apellidos']  ?>">
                                
                                
                                <select name="hijos" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Cantidad de Hijos</option>
                                        <option value="1">1 </option>
                                        <option value="2">2 </option>
                                        <option value="3">3 </option>
                                        <option value="4">4 </option>
                                        <option value="5">5 </option>
                                        <option value="6">6 </option>
                                        <option value="7">7 </option>
                                        <option value="8">8 </option>
                                        <option value="9">9 </option>
                                        <option value="10">10 </option>
                                        <option value="11">11 </option>
                                        <option value="12">12 </option>
                                        <option value="13">13 </option>
                                        <option value="14">14 </option>
                                        <option value="15">15 </option>


                                    </select>
                                
                                    <select name="regimen" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Regímen Tributario</option>
                                        <option value="Tradicional">Tradicional</option>
                                        <option value="Simplificado">Simplificado</option>
                                        <option value="Especial Agropecuario">Especial Agropecuario</option>
                                        <option value="Rentas de Capital Inmobiliario">Rentas de Capital Inmobiliario</option>
                                        <option value="Rentas de Capital Mobiliario">Rentas de Capital Mobiliario</option>
                                        <option value="Ganancias de Capital">Ganancias de Capital</option>

                                    </select>
                                
                               
                                    <select name="tipfac" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Tipo Facturación</option>
                                        <option value="Factura Eléctronica">Factura Eléctronica</option>
                                        <option value="Factura Pre-Impresos">Factura Pre-Impresos</option>
                                        <option value="No Factura">No Factura</option>


                                    </select>

                               
                                    <select name="asalariado" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Asalariado ( 46 Bis )</option>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>



                                    </select>
                                
                                
                                    <input type="text" class="form-control mb-3" name="act1" placeholder="Actividad Económica 1" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="tel" placeholder="Teléfono Principal *" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="ext1" placeholder="Ext 1 *" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="telad" placeholder="Teléfono Opcional *" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="cel" placeholder="Celular Principal *" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="celop" placeholder="Celular Opcional *" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="correop" placeholder="Correo Personal *" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="correofac" placeholder="Correo Facturacion Electrónico *" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="fechacontra" placeholder="Fecha de contratacion *" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="provindf" placeholder="Provincia distrito fiscal *" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="cantondf" placeholder="Cantón distrito fiscal *" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="distrdf" placeholder="Distrito distrito fiscal *" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="barriodf" placeholder="Barrio distrito fiscal *" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="señasdf" placeholder="Otras señas distrito fiscal *" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="clavecorre" placeholder="Clave Correo Principal *" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="clavefac" placeholder="Clave Correo Facturacion *" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="clavetravi" placeholder="Clave TRAVI *" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="claveatv" placeholder="Clave ATV *" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="claveccss" placeholder="Clave CCSS VIRTUAL *" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="claveins" placeholder="Clave INS *" value="<?php echo $row['apellidos']  ?>">
                                
                                
                                <select name="tp" id="selectSm" class="form-control-sm form-control">
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                        <option value="Moroso">Moroso</option>
                                    </select>

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>