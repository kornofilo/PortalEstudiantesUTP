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
        <form action="{{route('usersAdmin.getUser')}}" method="get">
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
@if($userData->nombre !== null)
<div class="card text-center mx-auto col-sm8 col-md8 col-lg6 col-xl-6">
  <div class="card-header font-weight-bold">
    {{$userData->nombre}} {{$userData->apellido}} ({{$userData->email}})
  </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <p class="card-text">Estudia la {{$userData->carrera}} en la {{$userData->facultad}} en la sede {{$userData->sede}}</p>
        </li>
        <li class="list-group-item">
            <form action="{{route('usersAdmin.changeRole', $userData->email ) }}" method="post">
            @csrf
                <select name="role" id="role" class="form-control" id="exampleFormControlSelect1">
                    @foreach($roles as $role) 
                    <!-- Si el rol del usuario coincide con el nombre del rol, se específica como opción seleccionada -->    
                        @if($userRole == $role->name)
                            <option selected>{{$role->name}}</option> 
                        @else
                            <option>{{$role->name}}</option> 
                        @endif                                                        
                    @endforeach                          
                </select>                
                <button type="submit" class="btn btn-warning font-weight-bold">
                    <i class="fas fa-user-tag"></i>
                    Actualizar Rol                                
                </button>
            </form>
        </li>
        <li class="list-group-item">
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
        </li>
    </ul>                            
  </div>
@endif
</div>

 <br><br>

@endsection