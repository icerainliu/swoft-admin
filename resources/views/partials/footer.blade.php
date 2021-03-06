<!-- Main Footer -->
<footer class="main-footer">
@if(config('admin.debug-console') && \Swoft\Admin\Admin::isDebug())
    @include('admin::debug.content')
@endif

    <!-- To the right -->
    <div class="pull-right hidden-xs">
        @if(config('admin.show_environment'))
            <strong>Env</strong>&nbsp;&nbsp; {!! env('APP_ENV') !!}
        @endif

        &nbsp;&nbsp;&nbsp;&nbsp;

        @if(config('admin.show_version'))
        <strong>Version</strong>&nbsp;&nbsp; {!! \Swoft\Admin\Admin::VERSION !!}
        @endif

    </div>
    <!-- Default to the left -->
    <strong>Powered by <a href="https://github.com/jqhph/swoft-admin" target="_blank">Swoft Admin</a></strong>
</footer>