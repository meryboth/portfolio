<style>
  #galeriaArq {
    display: none;
}
</style>

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
     <div class="botones container m-auto">
        <button type="button" class="btn btn-danger m-2" id="arquitectura" onclick="ocultar();">Arquitectura</button>
        <button type="button" class="btn btn-danger m-2" id="disenoGrafico">Diseño grafico</button>
        <button type="button" class="btn btn-danger m-2" id="paisajismo">Paisajismo</button>
        <button type="button" class="btn btn-danger m-2" id="disenoIndumentaria">Diseño de indumentaria</button>
        <button type="button" class="btn btn-danger m-2" id="disenoWeb">Diseño Web</button>
        <button type="button" class="btn btn-danger m-2" id="disenoIndustrial">Diseño industrial</button>
        <button type="button" class="btn btn-danger m-2" id="marketing">Marketing</button>
        <button type="button" class="btn btn-danger m-2" id="uxui">UX UI</button>
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

<main id="galeriaArq">
  <section class="row justify-content-center m-auto">
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1511871539190-20cb70cb3c8f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1157&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1499482624510-89fb8b6d0ded?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1512026662299-08aa89feced0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1081&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1609929915286-a1cfad18219e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1198&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
  </section>
  <section class="row justify-content-center">
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1609929915761-7e30cd938688?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1155&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
      <div class="card m-3" style="width: 18rem;">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1609928829859-5d2a81f2ffce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1249&q=80" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
          </div>
      </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1609928315400-0f59a18c9070?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1502801359384-79179236de27?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        </section>
        <section class="row justify-content-center">
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1526230040953-6bce5ae9861b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1154&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1507097489474-c9212a8f8597?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1448318440207-ef1893eb8ac0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1185&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1516681859000-292df1ed3e83?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary btn__portfolio">Ver portfolio</a>
            </div>
        </div>
        </section>
</main>

<section class="text-center">
    <a href="#up"><img src="https://icongr.am/fontawesome/angle-double-up.svg?size=80&color=cc0505" alt=""></a>
</section>


@endsection


