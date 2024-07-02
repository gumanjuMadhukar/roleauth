@include('app.includes.metahead')
<body>
    <div class="content-page">
        @yield('content')
    </div>
    @include('app.includes.scripts')
    @yield('footer-scripts')
</body>

</html>