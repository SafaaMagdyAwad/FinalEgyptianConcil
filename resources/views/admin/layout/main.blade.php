<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
    <header>
        @include('admin.includes.welcome')
        @include('admin.includes.navBar')
    </header>

    @yield('content')


    @include('admin.includes.script')


</body>

</html>
