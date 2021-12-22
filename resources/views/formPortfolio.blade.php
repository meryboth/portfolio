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

<form class="container  bg-light my-5 border rounded-3" id="formPortfolio" action="{{route('formPortfolio.store')}}" method="POST">
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
  
@endsection

<script type="text/javascript" src="{{ asset('js/form.js') }}"></script>



