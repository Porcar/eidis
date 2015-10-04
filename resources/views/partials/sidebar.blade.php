<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>

                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> @foreach (Auth::user()->roles()->get() as $role){{ $role->slug }}@endforeach</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa  fa-home'></i> <span>Inicio</span></a></li>
            <li><a href="/subjects"><i class='fa fa-graduation-cap'></i> <span>Materias</span></a></li>
            <li><a href="/users"><i class='fa fa-users'></i> <span>Estudiantes</span></a></li>
            <li><a href="/projects"><i class='fa fa-pencil-square-o'></i> <span>Proyectos</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-leanpub'></i> <span>Temas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">

              <!-- checks if the projects table has anything -->


                    @if(isset($name))
                        @foreach( $topics as $topic )
                            <li>
                                <a href="{{ route('topics.show', $topic->slug) }}">{{ $topic->name }}</a>
                             </li>

                        @endforeach
                            <li>
                              <a href="{{ route('topics.create') }}">Crear Tema</a>
                            </li>
                     @else
                    <li>
                      <a href="{{ route('topics.create') }}">Crear Tema</a>
                    </li>

                    @endif


                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
