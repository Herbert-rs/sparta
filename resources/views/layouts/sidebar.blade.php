


<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        @foreach(getSortedMenuItens() as $menu)
                            @if(validateMenuItem($menu))
                                <li>
                                    <a class="waves-effect waves-dark"
                                       href="{!!$menu['route'] !!}"
                                       aria-expanded="false">
                                       <i class="{!! $menu['icon'] !!}"></i>
                                       <span class="hide-menu">{!! $menu['description'] !!}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Mensagens"><i class="mdi mdi-bell"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
