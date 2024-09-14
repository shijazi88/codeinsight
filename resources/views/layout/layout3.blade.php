<!DOCTYPE html>
<html lang="en">

    <x-head headtitle='{{ $headtitle }}'/>
    <body  @php echo (isset($bodyClass) ? 'class="' . $bodyClass .'"': '');@endphp >

    @yield('content')

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