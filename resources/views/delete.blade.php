 <!-- Modal -->
<div class="modal fade" id="delete-{{$cat->idCategoria}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('categoria.destroy',$cat->idCategoria)}}" method="POST">
            @csrf
            @method('DELETE')
            
           
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Eliminar categoria?


            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <input type="submit" class="btn btn-danger" value="eliminar">
            </div>
        </div>
    </form> 
    </div>
</div>