<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
      /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
  </style>

  <style>
      body {
          font-family: 'Nunito', sans-serif;
      }
  </style>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script> 

  {{-- Boostrap JS --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  {{-- AJAX --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  {{-- Boostrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="antialiased d-flex flex-column min-vh-100 bg-bs-blue">
  <nav class="navbar bg-dark navbar-expand-lg d-none-py-3 fixed-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
    </div>
  </nav>
  <div id="app">
    <main class="py-4">
      <section class="bg-light text-dark pb-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header text-center"><h2><b>Filter Tasks</b></h2></div>
                <div class="card-body">

                  <div class="row mb-3">
                    <label for="isEnded" class="col-md-4 col-form-label text-md-end">Ended Tasks</label>
                    <div class="col-md-6">
                      <select id="isEnded" name="isEnded" class="form-select">
                        <option value="">Yes</option>
                        <option value="N">No</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="isEnded" class="col-md-4 col-form-label text-md-end">Due Date</label>
                    <div class="col-md-3">
                      <input id="due_date_ini" type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input id="due_date_end" type="date" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="isEnded" class="col-md-4 col-form-label text-md-end">End Date</label>
                    <div class="col-md-3">
                      <input id="end_date_ini" type="date" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <input id="end_date_end" type="date" class="form-control">
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                  <div class="row mb-0">
                    <div class="d-md-flex justify-content-md-center">
                      <button onclick="tasks_list();" class="btn btn-primary w-50">Buscar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-alpha text-dark pb-5">
        <div id="table-tasks" class="container">
          <div class="table-responsive">
            <div class="d-md-flex justify-content-md-end mb-3">
              <button class="btn btn-success w-25">New Task</button>
            </div>
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="table-dark">
                  <th class="text-center">Ended</th>
                  <th class="text-center">Task Name</th>
                  <th class="text-center">Due Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-secondary">
                  <td class="text-center" colspan="4">Select the parameters to search</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <script type="text/javascript">
    
        $(document).ready(function(){
    
          $(document).on('click', '.pagination a', function(event) {
    
            event.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            tasks_list(page);
          });
        });
    
        function tasks_list(page) {

          let isEnded = document.getElementById("isEnded").value;
          let due_date_ini = document.getElementById("due_date_ini").value;
          let due_date_end = document.getElementById("due_date_end").value;
          let end_date_ini = document.getElementById("end_date_ini").value;
          let end_date_end = document.getElementById("end_date_end").value;

          $.ajax({
    
            type:'get',
            url:'/tasksList',
            datatype:'json',
            data:{  'isEnded':isEnded,
                    'due_date_ini':due_date_ini,
                    'due_date_end':due_date_end,
                    'end_date_ini':end_date_ini,
                    'end_date_end':end_date_end,
                    'page':page
            },
            success:function(data) {
    
              $('#table-tasks').html(data);
    
            },
            error:function() {
    
              alert('error');
            }
          });
        }

      </script>
    </main>
  </div>
  <footer class="p-5 bg-dark mt-auto text-light text-center position-relative"></footer>
</body>
</html>
