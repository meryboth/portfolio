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

<div class="container-fluid">
    <div class="px-lg-5">
      <div class="row">
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold m-1">Fotografía</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <a href="{{'portfolio'}}">
            <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt="" class="img-fluid card-img-top">
              <div class="p-4">
                <h5> <a href="#" class="text-dark">Blorange</a></h5>
                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold m-1">Ilustración</span></p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">And She Realized</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold m-1">Fotografia</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">DOSE Juice</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold m-1">Branding</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-5.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">Pineapple</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold m-1">Ilustración</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-6.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">Yellow banana</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold m-1">Fotografía</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-7.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">Teal Gameboy</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold m-1">Branding</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="https://bootstrapious.com/i/snippets/sn-gallery/img-8.jpg" alt="" class="img-fluid card-img-top">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold m-1">Fotografía</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <a href="{{'formPortfolio'}}">
              <div class="bg-white rounded shadow-sm text-center "><div class="img-fluid bg-light card-img-top d-flex flex-column justify-content-center align-items-center"><img src="https://icongr.am/fontawesome/plus.svg?size=50&color=c20000" alt="" class="align-self-center"></div>
                <div class="p-4">
                  <h5> <a href="#" class="text-dark">Nuevo Portfolio</a></h5>
                  <p class="small text-muted mb-0">Agregá un nuevo portfolio a tu perfil</p>
                </div>
              </div>
          </a>
        </div>
        <!-- End -->
        
  
      </div>
    </div>
  </div>

@endsection
