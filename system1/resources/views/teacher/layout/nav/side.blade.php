<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <div class="mdc-drawer__header">
      <a href="index.html" class="brand-logo">
        <img src="{{ url('logo/logo.png') }}" width="150" alt="">
        <img src="{{ url('logo/iso.png') }}" width="150" alt="">
      </a>
    </div>
    <div class="mdc-drawer__content">
      <div class="user-info">
        {{-- <p class="name">Clyde Miles</p>
       <p class="email">clydemiles@elenor.us</p> --}}
      </div>
      <div class="mdc-list-group">
        <nav class="mdc-list mdc-drawer-menu">
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="{{ url('school/home') }}">
              <i class="	fas fa-home mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
              Home
            </a>
          </div>
         
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="{{ url('school/add-student') }}">
              <i class="fas fa-users mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
              Add Students
            </a>
          </div>
          
          
         
         
         
         
          {{-- <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="{{ url('teacher/fees') }}">
              <i class="fas fa-rupee-sign mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true"></i>
              Fees
            </a>
          </div> --}}
         
          
        </nav>
      </div>
    
  
    </div>
  </aside>