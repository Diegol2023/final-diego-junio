<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Mostrar Empleados </title>
</head>
<body>
    
    <div data-bs-theme="blue">
        <h1><center>Datos del Empleado:</center></h1>
    </div>
    {{-- <div style="background: rgb(165, 163, 162);">
        <h1><center>Datos del Empleado:</center></h1>
    </div> --}}
    
    <div style="background: rgb(131, 130, 133); border:solid 2px" class="container">
        <center>
            <div class="row">
                <div class="col">
                    <h2>NUMERO</h2>
                    <input type="text" name="id" value="{{ $relevamientos -> id}}" style="width : 100px; heigth : 10px" class="form-control" placeholder="NUMERO" aria-label="First name">
                </div>
            </div>
            <div class="col">
                <h2>NOMBRE EMPLEADO</h2>
                <input type="text" name="empleado" value="{{ $relevamientos -> empleado}}" style="width : 300px; heigth : 10px" class="form-control" placeholder="EMPLEADO" aria-label="Last name">
            </div>
            <div class="col">
                <h2>SECTOR EMPLEADO</h2>
                <input type="text" name="sector" value="{{ $relevamientos -> sector}}" style="width : 300px; heigth : 10px" class="form-control" placeholder="EMPLEADO" aria-label="Last name">
            </div>
            <div class="col">
                <h2>IP DISPOSITIVO</h2>
                <input type="text" name="direccionip" value="{{ $relevamientos -> direccionip}}" style="width : 300px; heigth : 10px" class="form-control" placeholder="EMPLEADO" aria-label="Last name">
            </div>
            <div class="col">
                <h2>EMAIL</h2>
                <input type="text" name="email" value="{{ $relevamientos -> email}}" style="width : 300px; heigth : 10px" class="form-control" placeholder="EMPLEADO" aria-label="Last name">
            </div>
            <div class="col">
                <h2>LEGAJO</h2>
                <input type="text" name="legajo" value="{{ $relevamientos -> legajo}}" style="width : 300px; heigth : 10px" class="form-control" placeholder="EMPLEADO" aria-label="Last name">
            </div>         
            <div class="col">
                <h2>TELEFONO INTERNO</h2>
                <input type="text" name="telinterno" value="{{ $relevamientos -> telinterno}}" style="width : 300px; heigth : 10px" class="form-control" placeholder="EMPLEADO" aria-label="Last name">
            </div>     
            <button class="btn btn-primary" data-bs-dismiss="modal">
                <a  href="{{url('index')}}" class="btn btn-primary" >CERRAR</a>
                
            </button>    
            <br>
            {{-- <button type="submit" class="btn btn-primary">Volver</button> --}}
            {{-- <button>Volver</button> --}}
        </center>
    </div>
</body>
</html>