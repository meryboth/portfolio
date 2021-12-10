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
</section>

<!-- PROYECTO -->

<main>
  <form class="container  w-50" id="form">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <h1 class="text-center m-4">Proyecto</h1>
  
      <!-- Nombre proyecto input -->
      <div class="form-outline mb-4">
        <input type="text" id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1">Nombre del proyecto</label>
      </div>
  
      <!-- Ocupación input -->
      <div class="form-outline mb-4">
          <input type="text" id="form3Example2" class="form-control" />
          <label class="form-label" for="form3Example2">Rubro / Especialidad</label>
        </div>
  
        <!-- Descripcion input -->
    <div class="form-outline mb-4">
      <textarea class="form-control" id="form4Example6" rows="4"></textarea>
      <label class="form-label" for="form4Example6">Descripción del proyecto</label>
    </div>
      <!-- Palabras claves -->
    <div class="form-outline mb-4">
      <input type="text" id="form3Example2" class="form-control" />
      <label class="form-label" for="form3Example2">Palabras claves</label>
    </div>
  
    <div class="row justify-content-center">
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <a href="#">
              <div class="bg-white rounded shadow-sm text-center "><div class="img-fluid bg-light card-img-top d-flex flex-column justify-content-center align-items-center"><img src="https://icongr.am/fontawesome/plus.svg?size=50&color=c20000" alt="" class="align-self-center"></div>
                <div class="p-4">
                  <h5> <a href="#" class="text-dark">Agregar Imagen</a></h5>
                </div>
              </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <a href="#">
              <div class="bg-white rounded shadow-sm text-center "><div class="img-fluid bg-light card-img-top d-flex flex-column justify-content-center align-items-center"><img src="https://icongr.am/fontawesome/plus.svg?size=50&color=c20000" alt="" class="align-self-center"></div>
                <div class="p-4">
                  <h5> <a href="#" class="text-dark">Agregar Imagen</a></h5>
                </div>
              </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <a href="#">
              <div class="bg-white rounded shadow-sm text-center "><div class="img-fluid bg-light card-img-top d-flex flex-column justify-content-center align-items-center"><img src="https://icongr.am/fontawesome/plus.svg?size=50&color=c20000" alt="" class="align-self-center"></div>
                <div class="p-4">
                  <h5> <a href="#" class="text-dark">Agregar Imagen</a></h5>
                </div>
              </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <a href="#">
              <div class="bg-white rounded shadow-sm text-center "><div class="img-fluid bg-light card-img-top d-flex flex-column justify-content-center align-items-center"><img src="https://icongr.am/fontawesome/plus.svg?size=50&color=c20000" alt="" class="align-self-center"></div>
                <div class="p-4">
                  <h5> <a href="#" class="text-dark">Agregar Imagen</a></h5>
                </div>
              </div>
          </a>
        </div>
    </div>
  
  
      <hr class="my-4">
    </form>
  
    <!-- Nuevo Formulario de Proyecto-->
    <section class="container  w-50" id="newForm">
  
    </section>
</main>

    <hr class="my-4">
        <div class="d-flex justify-content-center">
          <button href="#" onclick="newForm();">
              <div class="bg-white rounded shadow-sm text-center "><div class="img-fluid bg-light card-img-top d-flex flex-column justify-content-center align-items-center"><img src="https://icongr.am/fontawesome/plus.svg?size=50&color=d6d6d6" alt="" class="align-self-center"></div>
                <div class="p-4">
                  <h5> <a href="#" class="text-dark">Nuevo Proyecto</a></h5>
                  <p class="small text-muted mb-0">Agregá un nuevo proyecto a tu perfil</p>
                </div>
              </div>
            </button>
        </div>
    <!-- Submit button -->
    
    <div class="col text-center"><button type="submit" class="btn btn-danger btn-block mb-4 mt-5">Guardar Portfolio</button></div>
  </form>
  
@endsection

<script type="text/javascript" src="{{ asset('js/form.js') }}"></script>



