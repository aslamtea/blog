 <!-- sidebar menu -->
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      @foreach (Alya() as $t)
          
    <li><a><i class="{{$t->icon}}"></i> {{$t->menu_id}} <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          
          @foreach (Oke() as $i)
          @if ($t->m_id == $i->role_id )
          <li><a href="{{$i->url}}">{{$i->menu}}</a></li>
          @endif
          @endforeach
         
        </ul>
      </li>
      @endforeach
 
    </ul>
  </div>
 
</div>
<!-- /sidebar menu -->
