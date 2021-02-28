<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Seven</title>
    <link rel="stylesheet" href="/css/app.css">   
    <script src="/js/app.js" defer></script>
    
    <script src="/js/apexcharts.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-apexcharts"></script>
    

</head>
<body>
   <div id="app">
      @include('comunes._navbar')
    
      @yield('contenido')

    </div>



    <script>
        window.Promise ||
          document.write(
            '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
          )
        window.Promise ||
          document.write(
            '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
          )
        window.Promise ||
          document.write(
            '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
          )
      </script>

  
    
  
      <script>
        // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
        // Based on https://gist.github.com/blixt/f17b47c62508be59987b
        var _seed = 42;
        Math.random = function() {
          _seed = _seed * 16807 % 2147483647;
          return (_seed - 1) / 2147483646;
        };
      </script>

   
</body>
</html>