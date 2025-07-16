@props(['listado'])
<div>

<?php 
    switch($listado) {
        case 'papeles': $listados = $this->papeles_list; 
            echo '<table class="table table-striped">
            <tr><td>Tamaño</td><td>Gramaje</td><td>Precio</td><td>Activo</td><td>Acciones</td></tr>';
            foreach ($listados as $item) {
                echo '<tr>
                    <td>'. $item->tamano_papel .'</td>
                    <td>'. $item->gramaje .'</td>
                    <td>$'. $item->precio .'</td>
                    <td>'. $item->activo .'</td>
                    <td>
                        <!-- Botón Aceptar (Verde) --><button type="button" class="btn btn-success btn-icon" title="Aceptar"><i class="fas fa-check"></i></button>
                        <!-- Botón Modificar (Amarillo/Naranja) --><button type="button" class="btn btn-warning btn-icon" title="Modificar"><i class="fas fa-pencil-alt"></i></button>
                        <!-- Botón Eliminar (Rojo) --><button type="button" class="btn btn-danger btn-icon" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>';
            }
            echo '</table>';
            break;

        case 'lados': $listados = $this->lados_list; 
            echo '<table class="table table-striped">
            <tr><td>Lados</td><td>Factor</td><td>Activo</td><td>Acciones</td></tr>';
            foreach ($listados as $item) {
                echo '<tr>
                    <td>'. $item->lados . '</td>
                    <td>'. $item->factor .'</td>
                    <td>'. $item->activo .'</td>
                    <td>
                        <!-- Botón Aceptar (Verde) --><button type="button" class="btn btn-success btn-icon" title="Aceptar"><i class="fas fa-check"></i></button>
                        <!-- Botón Modificar (Amarillo/Naranja) --><button type="button" class="btn btn-warning btn-icon" title="Modificar"><i class="fas fa-pencil-alt"></i></button>
                        <!-- Botón Eliminar (Rojo) --><button type="button" class="btn btn-danger btn-icon" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>';
            }
            echo '</table>';  
            break;
        case 'sistemas': $listados = $this->sistemas_list; 
            echo '<table class="table table-striped">
                <tr><td>Sistema</td><td>Factor</td><td>Activo</td><td>Acciones</td></tr>';
            foreach ($listados as $item) {
                echo '<tr>
                    <td>'. $item->sistema . '</td>
                    <td>'. $item->factor .'</td>
                    <td>'. $item->activo .'</td>
                    <td>
                        <!-- Botón Aceptar (Verde) --><button type="button" class="btn btn-success btn-icon" title="Aceptar"><i class="fas fa-check"></i></button>
                        <!-- Botón Modificar (Amarillo/Naranja) --><button type="button" class="btn btn-warning btn-icon" title="Modificar"><i class="fas fa-pencil-alt"></i></button>
                        <!-- Botón Eliminar (Rojo) --><button type="button" class="btn btn-danger btn-icon" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>';
            }
            echo '</table>';  
            break;

        case 'tipos': $listados = $this->tipos_list;             
            echo '<table class="table table-striped">
                <tr><td>Nombre</td><td>Factor</td><td>Activo</td><td>Acciones</td></tr>';
            foreach ($listados as $item) {
                echo '<tr>
                    <td>'. $item->name . '</td>
                    
                    
                    <td>
                        <!-- Botón Aceptar (Verde) --><button type="button" class="btn btn-success btn-icon" title="Aceptar"><i class="fas fa-check"></i></button>
                        <!-- Botón Modificar (Amarillo/Naranja) --><button type="button" class="btn btn-warning btn-icon" title="Modificar"><i class="fas fa-pencil-alt"></i></button>
                        <!-- Botón Eliminar (Rojo) --><button type="button" class="btn btn-danger btn-icon" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                    </td>

                </tr>';
            }
            echo '</table>';  
            break;
    }
?>

    {{-- <table class="table table-striped">
        <tr><td>Tamaño</td><td>Gramaje</td><td>Precio</td><td>Activo</td><td>Acciones</td></tr>
        @foreach ($listados as $item)
            <tr>
                <td>{{ $item->tamano_papel }}</td>
                <td>{{ $item->gramaje }}</td>
                <td>$ {{ $item->precio }}</td>
                <td>{{ $item->activo }}</td>
                <td><input type="button" value="X"><input type="button" value="Y"><input type="button" value="Z"></td>
            </tr>    
        @endforeach
    </table> --}}
</div>