
    
    
            @csrf
            <div class="form-group">
                <label for="beneficiario" class="bmd-label-floating">Nombre Beneficiario</label>
            <input type="text" name="beneficiario" class="form-control" id="beneficiario" value="{{old('beneficiario',$formulario->beneficiario)}}">
                @error('title')
    
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="ci" class="bmd-label-floating">CI</label>
                <input type="text" name="ci" class="form-control" id="ci" value="{{old('ci',$formulario->ci)}}">
          
            </div>
            <div class="form-group">
                <label for="telefono" class="bmd-label-floating">Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" value="{{old('telefono',$formulario->telefono)}}">
          
            </div>
            <div class="form-group">
                <label for="barrio" class="bmd-label-floating">Barrio</label>
                <input type="text" name="barrio" class="form-control" id="barrio" value="{{old('barrio',$formulario->barrio)}}">
          
            </div>
           
            <div class="form-group">
                <label for="distrito_id" class="bmd-label-floating"> Distrito</label>
          <select name="distrito_id" class="form-control" id="distrito_id">
          
            @foreach ($listDistritos  as $nombre=>$id)
            <option {{$formulario->distrito_id==$id ?'selected="selected"':''}} value="{{$id}}">{{$nombre}}</option>
            
                @endforeach
          
           

          </select>
            </div>
            <div class="form-group">
                <label for="user_id"  class="bmd-label-floating">Usuario</label>
                <input type="hidden" name="user_id"readonly class="form-control" id="user_id" value="{{auth()->user()->id}}">
                <input type="text" name=""readonly class="form-control" id="" value="{{auth()->user()->name}}">

            </div>
        
              <input type="submit" class="btn btn-success" value="Registrar">
         
   
      




