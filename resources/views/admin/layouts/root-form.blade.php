<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Boostrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- end bootstrap CSS --}}

    {{-- fonts google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    {{-- end fonts google --}}

    {{-- style sheet CSS admin --}}
    <link rel="stylesheet" href="{{ asset('../css/style-admin.css') }}?v=1.8">
    {{-- end style sheet CSS admin --}}

    {{-- title admin --}}
    <title>@yield('title')</title>
    {{-- end title admin --}}
</head>

<body>
    <div class="d-flex py-5">
        <div class="col-lg-3 col-1 d-flex justify-content-center">
            <a href="@yield('routeback')" class="d-flex align-items-center">
                <img src="{{ asset('../adminassets/img/global/icon_back.svg') }}" alt="">
            </a>
        </div>
        <div class="col-lg-6 col-10">
            <div class="py-2 title-form text-center rounded-3">
                <h4 style="margin: 0">@yield('titleForm')</h4>
            </div>
        </div>
        <div class="col-lg-3 col-1">
        </div>
    </div>
    <div class="d-flex">
        <div class="col-lg-3 col-1 d-flex justify-content-center">
        </div>
        <div class="col-lg-6 col-10">
            @yield('form')
        </div>
        <div class="col-lg-3 col-1">
        </div>
    </div>

    {{-- Ini adalah section javascrip tag --}}
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>