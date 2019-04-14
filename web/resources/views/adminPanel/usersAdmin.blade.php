@extends('layouts.app')

@section('title','Gestión de Usuarios')


@section('content')

<div class="alert alert-info" role="alert">
    <h6 class="text-center"><span class="font-weight-bold">Gestión de Usuarios</span> - Ingrese la dirección de correo institucional del usuario que desea consultar y de click en el botón de buscar. </h6>
</div>

<div class="container-fluid">
        <form action="/getUser" method="get">
            @csrf
            <div class="form-group row justify-content-center">            
                <div class="col-auto">
                    <input class="form-control" type="search" id="userEmail" name="userEmail" placeholder="nombre.apellido@utp.ac.pa" aria-label="Search" required>
                </div>

                <div class="col-auto">
                 <button class="btn btn-info col" type="submit"> <i class="fas fa-search"></i> </button>              
                </div>
            </div>
        </form>
    </div>


    <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Email</th>
                <th scope="col">Nombre</th>
                <th scope="col">Facultad</th>
                <th scope="col">Carrera</th>
                <th scope="col">Rol</th>
                <th scope="col">Estatus</th>
                <th scope="col">Acciones</th>

                </tr>                
            </thead>
    @if($userData !== null)    
            <tbody>
                <th>{{$userData->email}}</td>  
                <td>{{$userData->nombre}}</td>       
                <td>{{$userData->facultad}}</td>   
                <td>{{$userData->carrera}}</td>       
                <td>
                    @isset($roles)    
                        <select class="form-control" id="exampleFormControlSelect1">                
                            @foreach($roles as $role)                                
                                <option>{{$role->name}}</option> 
                            @endforeach                          
                        </select>
                </td>       
                <td>{{$userData->estado}}</td>  
                <td>
                    <button type="button" class="btn btn-warning">Actualizar Rol</button>
                    <button type="button" class="btn btn-danger">Banear</button>
                </td>    
                    @endisset        
            </tbody>
    </table>
    @else
    <div class="alert alert-warning font-weight-bold" role="alert">
        Usuario no Encontrado.
    </div>
    @endif
    
     


</div>

    
@endsection