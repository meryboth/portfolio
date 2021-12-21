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

<!-- PORTFOLIO -->

<form class="container  bg-light my-5 border rounded-3" id="formPortfolio" action="{{ url('perfil/formPortfolio') }}" method="post" enctype="multipart/form-data">
  @csrf

  <h2 class="text-center m-4">Portfolio</h2>
  <div class="form-outline mb-4 w-50 m-auto">
    <input type="text" name="name" id="portfolioName" class="form-control" />
    <label class="form-label" for="name">Nombre del Portfolio</label>
  </div>

  <div class="form-outline mb-4 m-auto w-50">
    <input type="text" name="category" id="portfolioCategory" class="form-control" />
    <label class="form-label" for="category">Rubro</label>
  </div>

  <div class="form-outline mb-4 m-auto w-50">
    <textarea class="form-control" name="description" id="portfolioDescription" rows="4"></textarea>
    <label class="form-label" for="description">Descripción del portfolio</label>
  </div>
  <div class="col text-center"><button type="submit" class="btn btn-danger btn-block mb-4 mt-3">Guardar Portfolio</button></div>
</form>

<!-- PROYECTO -->

<main>
  <form class="container  w-50" id="form" action="{{ url('/Portfolio') }}" method="post" enctype="multipart/form-data">
  @csrf

  <!-- 2 column grid layout with text inputs for the first and last names -->
      <h2 class="text-center m-4">Proyecto</h2>
  
      <!-- Nombre proyecto input -->
      <div class="form-outline mb-4">
        <input type="text" name="name" id="proyectoName" class="form-control" />
        <label class="form-label" for="name">Nombre del proyecto</label>
      </div>
  
  
        <!-- Descripcion input -->
    <div class="form-outline mb-4">
      <textarea class="form-control" name="description" id="proyectoDescription" rows="4"></textarea>
      <label class="form-label" for="description">Descripción del proyecto</label>
    </div>

     <!-- Tecnologias 
    <div class="form-outline mb-4">
      <input type="text" id="form3Example2" class="form-control" />
      <label class="form-label" for="form3Example2">Tecnologias</label>
    </div -->
  
    <div class="d-flex flex-column justify-content-center">
      <h3 class="text-center">Subir imágenes</h3>
      <div class="row m-auto my-3">
        <input type="file" id="image1">
      </div>
      <div class="row m-auto my-3">
        <input type="file" id="image2">
      </div>
      <div class="row m-auto my-3">
        <input type="file" id="image3">
      </div>
      <div class="row m-auto my-3">
        <input type="file" id="image4">
      </div>
    </div>
    </form>
  
     <!-- Nuevo Formulario -->
  <section id="cuerpo" onload="load();">
    <div id="caja">
    </div>
  </section>
</main>

    <hr class="my-4">
        <div class="d-flex justify-content-center">
          <button onclick="test();" style="border: 0px">
              <div class="bg-white rounded shadow-sm text-center "><div class="img-fluid bg-light card-img-top d-flex flex-column justify-content-center align-items-center"><img src="https://icongr.am/fontawesome/plus.svg?size=50&color=d6d6d6" alt="" class="align-self-center"></div>
                <div class="p-4">
                  <h5> <a href="#" class="text-dark">Nuevo Proyecto</a></h5>
                  <p class="small text-muted mb-0">Agregá un nuevo proyecto a tu perfil</p>
                </div>
              </div>
            </button>
        </div>
    <!-- Submit button -->
    
    <div class="col text-center"><button type="submit" class="btn btn-danger btn-block mb-4 mt-5">Guardar proyectos</button></div>
  </form>

 
  
@endsection

<script type="text/javascript" src="{{ asset('js/form.js') }}"></script>



