@extends("layout")

@section("main")

<form class="container  w-50">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <h1 class="text-center m-4 row">Registrarse</h1>
    <div class="row mb-4">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-outline">
          <input type="text" id="form3Example1" class="form-control" />
          <label class="form-label" for="form3Example1">Nombre</label>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-outline">
          <input type="text" id="form3Example2" class="form-control" />
          <label class="form-label" for="form3Example2">Apellido</label>
        </div>
      </div>
    </div>
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="form3Example3" class="form-control" />
      <label class="form-label" for="form3Example3">Email</label>
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="form3Example4" class="form-control" />
      <label class="form-label" for="form3Example4">Contraseña</label>
    </div>

    <!-- Ocupación input -->
    <div class="form-outline mb-4">
        <input type="text" id="form3Example5" class="form-control" />
        <label class="form-label" for="form3Example5">Ocupación</label>
      </div>

      <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example6" rows="4"></textarea>
    <label class="form-label" for="form4Example6">Bio - Max 300 carácteres.</label>
  </div>
  
    <!-- Checkbox -->
    <div class="form-check d-flex justify-content-center mb-4">
      <input
        class="form-check-input me-2"
        type="checkbox"
        value=""
        id="form2Example33"
        checked
      />
      <label class="form-check-label" for="form2Example33">
        Guardar contraseña
      </label>
    </div>
  
    <!-- Submit button -->
    <div class="col text-center"><button type="submit" class="btn btn-danger btn-block mb-4">CREAR CUENTA</button></div>
  
    
  </form>
@endsection