<!DOCTYPE html>
<html lang="en">

<x-head headtitle='Checkout'/>

<body @php echo (isset($bodyClass) ? 'class="' . $bodyClass .'"': '');@endphp>

    <!-- ..:: rts header area start ::.. -->
    <x-header/>
    <!-- ..:: rts header area end ::.. -->

    <!-- ..:: rts breadcrumb area start-->
    <x-breadcrumb title='{{ $title }}' subtitle='{{ $subtitle }}'/>
    <!-- ..:: rts breadcrumb area end ::.. -->

    @yield('content')

    <!-- ..:: rts footer area start ::.. -->
    <x-footer/>
    <!-- ..:: rts footer area end ::.. -->

    <div id="anywhere-home" class="">
    </div>

    <!-- ..:: header style two ::.. -->
    <x-headerstyle/>
    <!-- ..:: header style two End ::.. -->

    <!-- ..:: rts backto top start ::.. -->
    <x-backtotop/>
    <!-- ..:: rts backto top end ::.. -->

    <!-- ..:: rts backto top start ::.. -->
    <x-script/>
    <!-- ..:: rts backto top end ::.. -->

</body>

</html>