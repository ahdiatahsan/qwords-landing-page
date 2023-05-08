<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

@include('layouts.public.header')

<body>
  <div class="bg-white text-gray-700 container-fluid mx-auto">
    @include('layouts.public.navbar')

    <main>
      @yield('content')
    </main>

    @include('layouts.public.footer')
  </div>

  @include('layouts.public.script')
</body>

</html>