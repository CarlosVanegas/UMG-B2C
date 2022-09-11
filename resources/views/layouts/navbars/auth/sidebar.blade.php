<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
        <img src="../assets/img/favicon-32x32.png" class="navbar-brand-img h-100" alt="...">
        <span class="ms-3 font-weight-bold">B2C | UMG </span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="navbar-collapse  w-auto h-auto ps">
        <ul class="navbar-nav">
            @isset($modules)
                @foreach($modules as $module)
                    @foreach($module as $value)
                        @isset($value->name)
                            @if($value->index === 1)
                                <li class="nav-item">
                                    <a class="nav-link {{ (Request::is($value->url_direct) ? 'active' : '') }}" href="{{ url($value->url_direct) }}" >
                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path class="color-background" d="{{$value->icon}}"/>
                                            </svg>
                                        </div>
                                        <span class="nav-link-text ms-1">{{$value->name}}</span>
                                    </a>
                                </li>
                            @endif
                        @endisset
                    @endforeach
                @endforeach
            @endisset
        </ul>
    </div>
  <div class="collapse navbar-collapse  w-auto h-auto ps" id="sidenav-collapse-main">
    <ul class="navbar-nav">
        @isset($modules)
            @foreach($modules as $module)
                @foreach($module as $value)
                    @isset($value->name)
                        @if($value->index > 1)
                            @isset($value->title_menu)
                                <li class="nav-item mt-2">
                                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">{{$value->title_menu}}</h6>
                                </li>
                            @endisset
                            <li class="nav-item">
                                <a id="module{{$value->id_module}}" data-bs-toggle="collapse" href="#opcioMenu_{{$value->id_module}}"  class="nav-link collapsed {{ (strpos(Request::path(), $value->url_direct) !== false) ? 'active' : '' }}" aria-controls="applicationsExamples" role="button" aria-expanded="false">
                                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path class="color-background" d="{{$value->icon}}"/>
                                        </svg>
                                    </div>
                                    <span class="nav-link-text ms-1">{{$value->name}}</span>
                                </a>
                                <div class="collapse {{ (strpos(Request::path(), $value->url_direct) !== false) ? 'show' : '' }}" id="opcioMenu_{{$value->id_module}}" style="">
                                    <ul class="nav ms-4 ps-3">
                                        @if (count($module['sub_module']) > 0)
                                            @foreach($module['sub_module'] as $item)
                                                <li class="nav-item {{ (Request::is($item->uri_direct) ? 'active' : '') }}" id="submodule{{$value->id_module}}">
                                                    <a class="nav-link {{ (Request::is($item->uri_direct) ? 'active' : '') }}" href="{{ url($item->uri_direct ) }}">
                                                        <span class="sidenav-mini-icon"> U </span>
                                                        <span class="sidenav-normal">{{$item->nombre}}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        @elseif (count($module['sub_module']) === 0)
                                            Sin permisos
                                        @endif
                                    </ul>
                                </div>
                            </li>
                        @endif
                    @endisset
                @endforeach
            @endforeach
        @endisset
    </ul>
  </div>

</aside>
