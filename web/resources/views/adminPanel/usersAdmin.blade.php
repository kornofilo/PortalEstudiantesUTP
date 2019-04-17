@extends('layouts.app')

@section('title','Gestión de Usuarios')


@section('content')
<!-- Información -->
<div class="alert alert-info" role="alert">
    <h6 class="text-center"><span class="font-weight-bold">Panel de Administración</span> - Gestión de Usuarios </h6>
</div>

<div class="alert alert-secondary" role="alert">
    <h6 class="text-center"> Ingrese la dirección de correo institucional del usuario que desea consultar y de click en el botón de buscar</h6> 
</div>

<div class="container-fluid">
        <!-- Formulario de Búsqueda de usuarios por dirección de correo electrónico -->
        <form action="{{route('usersAdmin.getUser') }}" method="get">
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


    <table class="table text-center border">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Email</th>
                <th scope="col">Nombre</th>
                <th scope="col">Facultad</th>
                <th scope="col">Carrera</th>
                <th scope="col" colspan="2">Rol</th>
                <th scope="col" colspan="2">Estatus</th>
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
                        <form action="{{route('usersAdmin.changeRole', $userData->email ) }}" method="post">
                        @csrf
                            <select name="role" id="role" class="form-control" id="exampleFormControlSelect1">
                                @foreach($roles as $role) 
                                    <!-- Si el rol del usuario coincide con el nombre del rol, se específica como opción seleccionada -->    
                                    @if($userData->roles()->value('name') == $role->name)
                                        <option selected>{{$role->name}}</option> 
                                    @else
                                        <option>{{$role->name}}</option> 
                                    @endif                                                        
                                @endforeach                          
                            </select>
                </td>
                <td>
                            <button type="submit" class="btn btn-warning font-weight-bold">
                                <i class="fas fa-user-tag"></i>
                                Actualizar Rol                                
                            </button>
                        </form>
                </td>     
                <td>{{$userData->estado}}</td>                   
                <td>
                    <!-- Si el usario se encuentra activo, se muestra la opción de "banear"-->    
                    @if($userData->estado === "Activo")
                        <form action="{{route('usersAdmin.banUser', $userData->email ) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger font-weight-bold">
                                <i class="fas fa-lock"></i>
                                Banear
                            </button>
                        </form>
                    @else
                        <form action="{{route('usersAdmin.reactivateUser', $userData->email ) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger font-weight-bold">
                                <i class="fas fa-unlock"></i>
                                Reactivar
                            </button>
                        </form>
                    @endif
                </td>
                    @endisset        
            </tbody>
    </table>    
    @endif
</div>
@endsection