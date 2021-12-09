

@extends("layout")

@section("main")

<section class="container m-auto">
    <h1 class="text-center m-5" id="up">Coleccion</h1>
    <div class="wrap">
        <div class="search">
           <input type="text" class="searchTerm" placeholder="Qué categoría estas buscando?">
           <button type="submit" class="searchButton">
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div>
     <div class="container m-auto">
       <div class="col">
          <button type="button" class="btn btn-danger m-2" onclick="galeriaArq();">Arquitectura</button>
          <button type="button" class="btn btn-danger m-2" onclick="galeriaDg();">Diseño grafico</button>
          <button type="button" class="btn btn-danger m-2" onclick="galeriaPj();">Paisajismo</button>
          <button type="button" class="btn btn-danger m-2" onclick="galeriaDi();">Diseño de indumentaria</button>
          <button type="button" class="btn btn-danger m-2" onclick="galeriaDw();">Diseño Web</button>
          <button type="button" class="btn btn-danger m-2" onclick="galeriaDin();">Diseño industrial</button>
          <button type="button" class="btn btn-danger m-2" onclick="galeriaMk();">Marketing</button>
       </div>
     </div>
</section>
<main id="galeria">
  <section class="row justify-content-center m-auto">
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1579762593175-20226054cad0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1236&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1626544827763-d516dce335e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1267&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1551651639-927b595f815c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1585157603209-378be66bede1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=456&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
  </section>
  <section class="row justify-content-center">
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1579762593175-20226054cad0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1236&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1626544827763-d516dce335e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1267&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1551651639-927b595f815c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1585157603209-378be66bede1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=456&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        </section>
        <section class="row justify-content-center">
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1579762593175-20226054cad0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1236&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1626544827763-d516dce335e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1267&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1551651639-927b595f815c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1585157603209-378be66bede1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=456&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        </section>
</main>



<main id="dg">
</main>

<main id="pj">
</main>

<main id="di">
</main>

<main id="dw">
</main>

<main id="din">
</main>

<main id="mk">
</main>

<main id="arq">
</main>

<main id="uxui">
</main>

<section class="text-center">
    <a href="#up"><img src="https://icongr.am/fontawesome/angle-double-up.svg?size=80&color=cc0505" alt=""></a>
</section>


@endsection

<script type="text/javascript" src="{!! asset('js/coleccion.js') !!}"></script>




