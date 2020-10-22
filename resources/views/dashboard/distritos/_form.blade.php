
    
    
            @csrf
            <div class="form-group">
                <label for="title" class="bmd-label-floating">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre',$distrito->nombre)}}">
                @error('title')
    
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="color" class="bmd-label-floating">Observacion</label>
                <input type="text" name="observacion" class="form-control" id="observacion" value="{{old('observacion',$distrito->observacion)}}">
          
            </div>
           
            
              <input type="submit" class="btn btn-success" value="Enviar">
         
   
      




