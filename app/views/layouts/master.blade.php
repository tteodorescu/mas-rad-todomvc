{{ HTML::style('bootstrap.css') }}

<html>
  <header class='panel-default' style='background-color:#000'>
    <h1 style='-webkit-border-radius:10px;color:#fff;padding:30px'>TODOMVC application</h1>
  </header>
  <body>    
    @section('sidebar')
    <h3>
      <div style='float:right'>
        {{ 'Today you '.Infos::activityToday()}}
      </div>
    </h3>
    @show

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
