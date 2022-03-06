<script>
  jQuery(document).ready(function(){
    var menu = window.location.href.split('/');
    console.log(menu[6-1])

    if(menu[6-1] != ""){
      var active = $(".active");
      $(active).addClass("text-white")
      $(active).removeClass("active")
      $(`#${menu}`).removeClass("text-white")
      $(`#${menu}`).addClass("active")
    }else{
      console.log("b")
    }
  })
  
</script>
<div >
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">QUẢN LÝ KHO</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="./" class="nav-link active " id="home"  aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          <i class="fa-solid fa-house"></i> Trang chủ
        </a>
      </li>
      <li  class="nav-item">
        <a href="./linhkien" class="nav-link text-white" id="linhkien">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16">
            <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
          </svg> Linh kiện
        </a>
      </li>
      <li>
        <a href="./sanpham" class="nav-link text-white" id="sanpham">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          <i class="fa-solid fa-box-archive"></i> Sản phẩm
        </a>
      </li>
      <li>
        <a href="./sanxuat" class="nav-link text-white" id="sanxuat">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          <i class="fa-solid fa-gear"></i> Sản xuất
        </a>
      </li>
      <li>
        <a href="./nhapkho" class="nav-link text-white" id="nhapkho">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          <i class="fa-solid fa-arrow-down"></i> Nhập kho
        </a>
      </li>
      <li>
        <a href="./linhkien" class="nav-link text-white" id="xuatkho">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          <i class="fa-solid fa-arrow-up"></i> Xuất kho
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
</div>
