@extends("layout")
@section("main")

<section class="container bg-light my-5 border rounded-3">
    <div class="d-flex justify-content-center m-3">
        <img src="https://i.ibb.co/vQsCbZc/image.jpg" class="rounded-circle">
        </div>
    <div class="d-flex justify-content-center align-items-center">
        <h4 class="text-center fw-bold m-1">Jane Doe</h4>
        <a href="{{'configuracion'}}"><img src="https://icongr.am/fontawesome/gear.svg?size=20&color=c20000" alt=""></a>
    </div>
    <h6 class="text-center">Diseñadora Gráfica</h6>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos officia numquam voluptate mollitia eos iusto explicabo illo.</p>
    <ul class="list-unstyled d-flex justify-content-center">
        <li class="m-1">
          <a href="#!"><img src="https://icongr.am/fontawesome/facebook-official.svg?size=30&color=c20000" alt=""></a>
        </li>
        <li class="m-1">
          <a href="#!"><img src="https://icongr.am/fontawesome/instagram.svg?size=30&color=c20000" alt=""></a>
        </li>
        <li class="m-1">
          <a href="#!"><img src="https://icongr.am/fontawesome/envelope.svg?size=30&color=c20000" alt=""></a>
        </li>
        <li class="m-1">
          <a href="#!"><img src="https://icongr.am/fontawesome/linkedin-square.svg?size=30&color=c20000" alt=""></a>
        </li>
      </ul>

      <form class="container  w-50">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <h2 class="text-center m-4">Editar perfil</h2>
        <div class="row mb-4">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-outline">
              <input type="text" id="form3Example1" class="form-control" />
              <label class="form-label" for="form3Example1">Nombre</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
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

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form3Example5" class="form-control" />
            <label class="form-label" for="form3Example5">Nueva Contraseña</label>
          </div>
    
        <!-- Ocupación input -->
        <div class="form-outline mb-4">
            <input type="text" id="form3Example6" class="form-control" />
            <label class="form-label" for="form3Example6">Ocupación</label>
          </div>
    
          <!-- Message input -->
      <div class="form-outline mb-4">
        <textarea class="form-control" id="form4Example7" rows="4"></textarea>
        <label class="form-label" for="form4Example7">Bio - Max 300 carácteres.</label>
      </div>
        <h2 class="text-center m-4">Redes Sociales</h2>
        <div class="row mb-4">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-outline">
                <input type="text" id="linkedin" class="form-control" />
                <label class="form-label" for="linkedin"><img src="https://icongr.am/fontawesome/linkedin-square.svg?size=20&color=c20000" alt="" class="m-1">Linkedin</label>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-outline">
                <input type="text" id="correo" class="form-control" />
                <label class="form-label" for="correo"><img src="https://icongr.am/fontawesome/envelope.svg?size=20&color=c20000" alt="" class="m-1">Correo</label>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-outline">
                <input type="text" id="instagram" class="form-control" />
                <label class="form-label col-xs-12" for="instagram"><img src="https://icongr.am/fontawesome/instagram.svg?size=20&color=c20000" alt="" class="m-1">Instagram</label>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-outline">
                <input type="text" id="facebook" class="form-control" />
                <label class="form-label " for="facebook"><img src="https://icongr.am/fontawesome/facebook-official.svg?size=20&color=c20000" alt="" class="m-1">Facebook</label>
              </div>
            </div>
          </div>
        <!-- Submit button -->
        <div class="col text-center"><button type="submit" class="btn btn-danger btn-block mb-4">Guardar cambios</button></div>
      
        
      </form>
</section>


    

@endsection