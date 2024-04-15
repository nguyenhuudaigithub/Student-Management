 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
     <a href="/" class="navbar-brand">
         <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Hutech</h1>
     </a>
     <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav mx-auto">
             <a href="/" class="nav-item nav-link active">Trang Chủ</a>
             <a href="/blogs" class="nav-item nav-link">Bài viết</a>
             <a href="/user/courses" class="nav-item nav-link">Lớp Học</a>
             <!-- <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                 <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                     <a href="facility.html" class="dropdown-item">School Facilities</a>
                     <a href="team.html" class="dropdown-item">Popular Teachers</a>
                     <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                     <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                     <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                     <a href="404.html" class="dropdown-item">404 Error</a>
                 </div>
             </div> -->
         </div>
         <!-- <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a> -->
         @if (Route::has('login'))
         <nav class="navbar navbar-expand-lg navbar-light">
             <div class="container">
                 <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                         @auth
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                 <img class="rounded-circle object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="width: 32px; height: 32px;" />
                                 @else
                                 {{ Auth::user()->name }}
                                 @endif
                             </a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="{{ route('profile.show') }}">Hồ sơ</a></li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li>
                                     <form method="POST" action="{{ route('logout') }}">
                                         @csrf
                                         <button type="submit" class="dropdown-item">Đăng xuất</button>
                                     </form>
                                 </li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 @if(Auth::user()->isAdmin)
                                 <li>
                                     <a href="/ad" class="dropdown-item">Trang Quản Lý</a>
                                 </li>
                                 @endif

                             </ul>
                         </li>
                         @else
                         <li class="nav-item">
                             <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Đăng Nhập</a>
                         </li>
                         @if (Route::has('register'))
                         <li class="nav-item">
                             <a href="{{ route('register') }}" class="btn btn-dark">Đăng Ký</a>
                         </li>
                         @endif
                         @endauth
                     </ul>
                 </div>
             </div>
         </nav>
         @endif



     </div>
 </nav>
 <!-- Navbar End -->
