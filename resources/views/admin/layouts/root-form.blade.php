<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Boostrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- end bootstrap CSS --}}

    {{--  fonts google  --}}
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    {{-- end fonts google --}}

    {{-- style sheet CSS admin --}}
    <link rel="stylesheet" href="{{ asset('../css/style-admin.css')}}">
    {{-- end style sheet CSS admin --}}
    
    {{-- title admin --}}
    <title>@yield('title')</title>
    {{-- end title admin --}}
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex flex-row justify-content-between">
            <div class="py-2 title-form text-center rounded-3">
                <h4 style="margin: 0">@yield('titleForm')</h4>
            </div>
            <a href="@yield('routeback')" class="d-flex align-items-center">
                <img src="{{ asset('../adminassets/img/global/icon_back.svg') }}" alt="">
            </a>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <div class="w-50">
                @yield('form')
            </div>
        </div>
	</div>



	{{-- Ini adalah section javascrip tag --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>