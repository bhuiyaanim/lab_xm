<!DOCTYPE html>
<html>

    <head>
        <title>Search Resturent</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
        <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading">
        <h3>Search Parking </h3>
        </div>

        <div class="container">
          <div class="row">
          <div class="panel panel-default">
          <div class="panel-heading">
          <a href="{{route('home.index')}}">Home</a> |
          <a href="{{route('parkingspace.spaceList')}}">Resturent List</a> |
          <a href="/logout">Logout</a>
        </div>

        <div class="container">
          <div class="row">
          <div class="panel panel-default">
          <div class="panel-heading">
          <h4>Total Resturent : {{$count}}</h4>
        </div>
        
        <div class="panel-body">

        <div class="form-group">

        <input type="text" class="form-controller" id="search" name="search" value="">


        </div>

        <table class="table table-bordered table-hover">

        <thead>

        <tr>

        <th>Resturent Name</th>

        <th>Area</th>

        <th>House No.</th>

        <th>Road No. </th>

        <th>Action</th>

        </tr>

        </thead>

        <tbody id='tbody'>

        </tbody>

        </table>

        </div>

        </div>

        </div>

        </div>

        <script type="text/javascript">
            const search = document.getElementById('search');
            const tableBody = document.getElementById('tbody');
            function getContent(){
            
            const searchValue = search.value;
            
                const xhr = new XMLHttpRequest();
                xhr.open('GET','{{route('search.action')}}/?search=' + searchValue ,true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function() {
                    
                    if(xhr.readyState == 4 && xhr.status == 200)
                    {
                        tableBody.innerHTML = xhr.responseText;
                    }
                }
                xhr.send()
            }
            search.addEventListener('input',getContent);
        </script>

    </body>

</html>