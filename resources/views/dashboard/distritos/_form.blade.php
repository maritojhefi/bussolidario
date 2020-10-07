
    
    
            @csrf
            <div class="form-group">
                <label for="title">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre',$distrito->nombre)}}">
                @error('title')
    
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="color">Ubicacion</label>
                <input type="text" name="ubicacion" class="form-control" id="ubicacion" value="{{old('ubicacion',$distrito->ubicacion)}}">
          
            </div>
           
            
              <input type="submit" class="btn btn-success" value="Enviar">
         
   
      




