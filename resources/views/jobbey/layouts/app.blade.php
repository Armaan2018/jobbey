<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Jobby - Browse Jobs</title>
    
    @include('jobbey.layouts.partials.css')
</head>

<body>
     {{-- searchmodal --}}
     @include('jobbey.layouts.searchmodal')
     {{-- header --}}
      @include('jobbey.layouts.header')
     {{-- titlebar --}}
      @include('jobbey.layouts.titlebar')


    <main class="browse-section">
        <div class="container">
            <div class="row">
                 
                 @section('main-content')
                 @show

               
            </div>
        </div>
    </main>
   {{-- footer --}}
    @include('jobbey.layouts.footer')
   

        @include('jobbey.layouts.partials.js')
</body>


</html>