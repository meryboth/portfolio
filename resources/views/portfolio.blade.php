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

<section>
    <h1 class="text-center">Portfolio de ilustraciones</h1>
    <div class="d-flex justify-content-center">
        <h4 class="fw-bold text-center m-1">Ilustraciones</h4>
        <h4 class="fw-bold text-center m-1"> | Diseño Gráfico</h4>
    </div>
    <div class="row justify-content-center m-3">
        <div class="bg-light w-50">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, delectus veniam doloribus ipsum nesciunt alias tempore recusandae autem, numquam quae veritatis molestias atque deserunt officiis molestiae animi nemo incidunt! Possimus quod accusantium facilis repellat in officiis recusandae itaque reiciendis obcaecati.</p>
        </div>
    </div>
    <div class="bg-light container m-auto mb-5">
        <h2 class="text-center m-5">Proyecto A</h2>
        <div class="d-flex justify-content-center align-items-center">
            <p class="w-50 ml-3 text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis non commodi esse, tempora harum ex quisquam ea! Esse labore sapiente inventore, eveniet reprehenderit quia maiores possimus nesciunt culpa odio ratione, provident reiciendis tempora ex quam nulla eligendi temporibus quos assumenda.</p>
            <div class="col">
                <h6 class="fw-bold mx-4">
                    Tecnologías
                </h6>
                <ul>
                    <li>- Adobe Photoshop</li>
                    <li>- Adobe Illustrator</li>
                    <li>- Adobe XD</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center m-5">
        <img src="https://images.unsplash.com/photo-1620428268482-cf1851a36764?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1109&q=80" alt="" class="rounded img-fluid m-1" style="width: 650px; overflow:hidden;">
        <img src="https://images.unsplash.com/photo-1611462985358-60d3498e0364?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="rounded img-fluid m-1" style="width: 650px; overflow:hidden;">
    </div>
    <div class="bg-light container m-auto mb-5">
        <h2 class="text-center m-5">Proyecto B</h2>
        <div class="d-flex justify-content-center align-items-center">
            <p class="w-50 ml-3 text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis non commodi esse, tempora harum ex quisquam ea! Esse labore sapiente inventore, eveniet reprehenderit quia maiores possimus nesciunt culpa odio ratione, provident reiciendis tempora ex quam nulla eligendi temporibus quos assumenda.</p>
            <div class="col">
                <h6 class="fw-bold mx-4">
                    Tecnologías
                </h6>
                <ul>
                    <li>- Adobe Photoshop</li>
                    <li>- Adobe Illustrator</li>
                    <li>- Adobe XD</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center m-5">
        <img src="https://images.unsplash.com/photo-1580196969807-cc6de06c05be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1579&q=80" alt="" class="rounded img-fluid m-1" style="width: 650px; overflow:hidden;">
        <img src="https://images.unsplash.com/photo-1579762593175-20226054cad0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1236&q=80" alt="" class="rounded img-fluid m-1" style="width: 650px; overflow:hidden;">
    </div>
    <div class="bg-light container m-auto mb-5">
        <h2 class="text-center m-5">Proyecto C</h2>
        <div class="d-flex justify-content-center align-items-center">
            <p class="w-50 ml-3 text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis non commodi esse, tempora harum ex quisquam ea! Esse labore sapiente inventore, eveniet reprehenderit quia maiores possimus nesciunt culpa odio ratione, provident reiciendis tempora ex quam nulla eligendi temporibus quos assumenda.</p>
            <div class="col">
                <h6 class="fw-bold mx-4">
                    Tecnologías
                </h6>
                <ul>
                    <li>- Adobe Photoshop</li>
                    <li>- Adobe Illustrator</li>
                    <li>- Adobe XD</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center m-5">
        <img src="https://images.unsplash.com/photo-1509664158680-07c5032b51e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="rounded img-fluid m-1" style="width: 650px; overflow:hidden;">
        <img src="https://images.unsplash.com/photo-1472201248592-1241c92256ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1588&q=80" alt="" class="rounded img-fluid m-1" style="width: 650px; overflow:hidden;">
    </div>
</section>
<section class="d-flex justify-content-center">
    <button class="btn bg-danger text-light">Compartir portfolio</button>
</section>
<div class="row justify-content-center m-3">
    <div class="form-outline mb-4 w-50">
        <input type="text" id="form3Example1" class="form-control" placeholder="http//appPortfolio.com/janedoe/porfolioilustraciones" />
        <label class="form-label" for="form3Example1">URL</label>
    </div>
</div>

@endsection
