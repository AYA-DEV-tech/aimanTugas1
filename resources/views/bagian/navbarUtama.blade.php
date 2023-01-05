<!-- navbar -->
<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <h5 class="text-white h4"><form action="/logout" method="post" >@csrf <button type="submit" class="rounded p-2 text-light bg-danger" style="border:none" >Logout</button></form></h5>
        <span class="text-muted">Toggleable via the navbar brand.</span>
        
    </div>
</div>
<div class="navbar navbar-dark bg-dark d-flex p-1" style="justify-content: space-between;">

    <div class="kiri d-flex  align-items-center p-1">
        <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="dropdown ms-2 me-2">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin Settings
            </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
        </div>

        <a class="pos" href="#" > <i class="bi bi-cart"></i> POS<a>
        <a href="#" class="text-light mx-3" > <i class="bi bi-fullscreen fs-4 "></i> </i><a>
        <a href="#" class="text-light mx-4 " > <i class="bi bi-toggle-off fs-4 "></i><a>

        
    </div>

    <!-- tengah -->
    <div class="tengah"><div class="fs-3">🍀</div></div>

    <!-- kanan -->
    <div class="kanan d-flex align-items-center ">
    <div class="dropdown ms-2 me-2" style="display:none;" >
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Language
            </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
        </div>
    <div class="dropdown ms-2 me-2">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Language
            </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
        </div>
    <button type="button" style="padding:0" class="btn btn-dark position-relative me-3 ">
      <i class="bi bi-bell fs-5"></i>
      <span class="position-absolute top-20 start-100 translate-middle badge rounded-pill bg-danger " >
        0
        <span class="visually-hidden">unread messages</span>
      </span>
    </button>
    <button type="button"  style="padding:0" class="btn btn-dark position-relative me-3">
    <i class="bi bi-clock fs-5"></i>
      <span class="position-absolute top-20 start-100 translate-middle badge rounded-pill bg-danger ">
        Off
        <span class="visually-hidden">unread messages</span>
      </span>
    </button>
    <button type="button"  style="padding:0" class="btn btn-dark position-relative me-3 ">
    <i class="bi bi-bag fs-5"></i>
      <span class="position-absolute top-20 start-100 translate-middle badge rounded-pill " style="background:orange" >
        0
        <span class="visually-hidden">unread messages</span>
      </span>
    </button>
    <img src="img/imgUpdate.jpg" class="kecil rounded-circle " >
    <div class="dropdown ms-2 me-2">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jhon Doe
            </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
        </div>
    </div>
    
  
</div>