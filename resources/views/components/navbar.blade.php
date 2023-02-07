<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

    @foreach ($navbar_services as $navbar )
    <li><a class="dropdown-item" href="{{ route('front.service' , $navbar->slug) }}">{{ $navbar->title ?? '' }} </a></li>
    @endforeach
  
  </ul>
