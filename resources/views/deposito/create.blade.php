<h1>Bienvenido, {{$nombre1}}</h1>
Id del afiliado es: {{$idem}}<br>
Id del empleado es:{{$nombre}}<p>


<form action="/deposito"class= "form-control"method ="POST"><p>
   @csrf
 <label for="">codigo empleado</label>
 <input type="text" id="codigoEmpleado" value="{{$idem}}" name="codigoEmpleado"><p>

 <label for="">Codigo afiliado</label>
 <input type="text" id="codigoAfiliado" value="{{$nombre}}"name="codigoAfiliado"><p>

 <label for="">Nombre afiliado</label>
 <input type="text" id="nombreafi" value="{{$nombre1}}" name="nombreafi" ><p>

 <label for="">Fecha</label>
 <input type="text" id="fecha" placeholder="2023-11-08" name="fecha" ><p>

 <label for="">Cantidad</label>
 <input type="text" id="cantidad" placeholder="2000" name="cantidad" ><p>


 <div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/empleado" class="btn btn-danger">Cancelar</a>

 </div>



</form>