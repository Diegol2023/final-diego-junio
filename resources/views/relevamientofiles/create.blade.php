<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Dar de Alta Empleados</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a href="{{url('index')}}" class="nav-link" href="#">INICIO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    <style>
        * {
            box-sizing: border-box;
            margin: 5px;
            padding: 1px;
          
            #contenedor1 {
            width: 250px;
            height: 15x;
            justify-content: center;
            background-color: #9da1a1cc;
          }
    
        }
    
    </style>
        
        {{-- <h2>Ingrese Datos del Empleado:</h2> --}}
        <div style="background-color: #9da1a1cc; width: 500px"><h2>INGRESE DATOS DEL EMPLEADO</h2></div>
        
        <div id = contenedor1  justify-content: center;>
        
            <form action="{{route('create.store')}}" method="post">
                @csrf
                <div class="col" >
                    <label><b> EMPLEADO </b></label>
                    <input type="text" name="empleado">
                    {{-- <h2>NOMBRE EMPLEADO</h2> --}}
                    {{-- <label for="formGroupExampleInput" class="form-label">NOMBRE EMPLEADO</label> --}}
                    {{-- <input type="text" name="empleado" value="{{ $relevamientos -> empleado}}" style="width : 300px; heigth : 10px; background-color: #9da1a1cc" class="form-control" placeholder="EMPLEADO" aria-label="Last name"> --}}
                </div>
                <div class="col">
                    <label><b> SECTOR </b></label>
                    <input type="text" name="sector">
                        {{-- <h2>SECTOR EMPLEADO</h2> --}}
                        {{-- <input type="text" name="sector" value="{{ $relevamientos -> sector}}" style="width : 300px; heigth : 10px; background-color: #9da1a1cc" class="form-control" placeholder="EMPLEADO" aria-label="Last name"> --}}
                </div>   
                <div class="col" >
                    <label><b>IP DISPOSITIVO</b></label>
                    <input type="text" name="direccionip">
                    {{-- <h2></h2>
                    <input type="text" name="direccionip" value="{{ $relevamientos -> direccionip}}" style="width : 300px; heigth : 10; background-color: #9da1a1cc" class="form-control" placeholder="EMPLEADO" aria-label="Last name"> --}}
                </div>
                <div class="col">
                    <label><b>EMAIL</b></label>
                    <input type="text" name="email">   
                    {{-- <h2>EMAIL</h2>
                    <input type="text" name="email" value="{{ $relevamientos -> email}}" style="width : 300px; heigth : 10px; background-color: #9da1a1cc" class="form-control" placeholder="EMPLEADO" aria-label="Last name"> --}}
                </div>   
                <div class="col" >
                    <label><b>LEGAJO</b></label>
                    <input type="text" name="legajo">
                    {{-- <h2>LEGAJO</h2>
                    <input type="text" name="legajo" value="{{ $relevamientos -> legajo}}" style="width : 300px; heigth : 10px; background-color: #9da1a1cc" class="form-control" placeholder="EMPLEADO" aria-label="Last name"> --}}
                </div>     
                <div class="col">
                    <label><b>TEL. INTERNO</b></label>
                    <input type="text" name="telinterno">
                    {{-- <h2>TELEFONO INTERNO</h2>
                    <input type="text" name="telinterno" value="{{ $relevamientos -> telinterno}}" style="width : 300px; heigth : 10px; background-color: #9da1a1cc" class="form-control" placeholder="EMPLEADO" aria-label="Last name"> --}}
                </div>    
                <div >
                <label><i>Ingrese sin 0 y sin 15</i></label>
                <div>
                    <center>
                    <button type="submit" class="btn btn-primary btn-sm"> CREAR </button>
                    </center>
                </div>
                <br>
            
            </form>
        
        </div>   
</body>
</html>