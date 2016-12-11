
<div class="panel panel-default col-md-offset-3 col-lg-6">
    <div class="panel-heading">
        <h3 class="panel-title">@yield('title', 'Default')</h3>
    </div>
    <div class="panel-body">
        @include('flash::message')
        @include('admin.template.partials.errors')
        @yield('content2')
    </div>
</div>
