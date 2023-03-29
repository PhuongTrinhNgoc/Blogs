<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid container">
      <a class="navbar-brand" href="#">Blogs</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="{{ request()->is('/') ? 'active' : ''}} nav-link "  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="{{ request()->is('about') ? 'active' : ''}} nav-link " href="about">about</a>
            
          </li>
    
        
        </ul>
        <form class="d-flex">
          {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button> --}}
          <div>
         @if (!empty(Auth::user()->userName))
         <div style="display: flex;align-items:center">
          <div style="margin-right: 20px">Hello  </div>
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
         
              <span style="font-size: 16px;font-weight:600">{{ Auth::user()->userName }}</span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a style="margin-left: 20px" href=" {{ route('logout.user') }}">logout</a>
            </ul>
          </div>

       
         </div>
       
            @else
      
            <a href=" {{ route('login.user') }}">login</a>
            {{-- {{ route('res-form') }} --}}
      @endif 
          </div>
        </form>
      </div>
    </div>
  </nav>