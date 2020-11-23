<div class="sidebar">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    
    <a class="simple-text logo-mini">
    <i class="fas fa-bars"></i>
    </a>
    <a href="#" class="simple-text logo-normal">
      <img src="https://www.uees.edu.ec/img/logo.png" alt="">
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">

    <div class="profile-photo nav">
    
                <img class="avatar border-gray" src="{{asset('assets')}}/img/default-avatar.png" alt="...">
                <br> <br>
                <h5 class="title">{{ auth()->user()->name }}</h5>
             
    </div>

    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}" class="nav-item">
        <i class="fas fa-columns"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'horarios') active @endif">
        <a href="{{ route('page.index','horarios') }}" class="nav-item">
        <i class="far fa-calendar-alt"></i>
          <p>{{ __('Horarios') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'pagos') active @endif">
        <a href="{{ route('page.index','pagos') }}" class="nav-item">
        <i class="fas fa-cash-register"></i>
          <p>{{ __('Pagos') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'saldos') active @endif">
        <a href="{{ route('page.index','saldos') }}" class="nav-item">
        <i class="fas fa-dollar-sign"></i>
          <p>{{ __('Saldos') }}</p>
        </a>
      </li>   
      <li class="@if ($activePage == 'icons') active @endif">
        <a href="{{ route('page.index','icons') }}" class="nav-item">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'maps') active @endif">
        <a href="{{ route('page.index','maps') }}" class="nav-item">
          <i class="now-ui-icons location_map-big"></i>
          <p >{{ __('Maps') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'notifications') active @endif">
        <a href="{{ route('page.index','notifications') }}" class="nav-item">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}" class="nav-item">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="{{ route('page.index','typography') }}" class="nav-item">
          <i class="now-ui-icons text_caps-small"></i>
          <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li>
      <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="nav-item">
                          <i class="fas fa-sign-out-alt"></i>
              <p>{{ __('Cerrar Sesión') }}</p>
            </a>
      </li>
    </ul>
  </div>
</div>

@push('js')
  <script>
    $('document').ready(function (){
      $('.logo-mini').click(function() {
        //$('.sidebar').addClass('expand-side')
       // localStorage.setItem('expand', 0);
      })
    })
  </script>
@endpush
