<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Styles -->
        <style>
          .btn-success.active{
              background-color : #87B87F! important;
              border-radius: 1px;
          }
          .container-header{
              padding-top: 50px;
              padding-left: 40px;
              padding-bottom: 20px;
          }

        </style>
    </head>
    <body>
    <div class="container-header">
    </br>
    <button type="button" class="btn btn-success btn-lg active" data-toggle="collapse" data-target="#user"><i class="fa fa-random"></i>Buat nama</button>
    </br>
    </br>
    <div id="user" class="collapse"> 
        <div class="container-fluid" style="border:1px solid #cecece;">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                    </tr>
                    <tr>
                        <th rowspan="1" colspan="1">
                            <input type="text" size="12" id="search_name" placeholder="Search Nama">
                        </th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                    <tr>
                        <td>{{$datas->name}}</td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </br>
    </br>
    
    <button type="button" class="btn btn-success btn-lg active" data-toggle="collapse" data-target="#result"><i class="glyphicon glyphicon-eye-open"></i>Tampilkan hasil</button>

    <div id="result" class="collapse"> 
        @foreach($result as $data => $value)
            </br></br> <h1>{{$data}}</h1> 
            @foreach($value as $var)
        </br> {{$var}}
            @endforeach
        @endforeach
    </div>
</div>


<!--Import jQuery before export.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<!--Data Table-->
<script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

<!--Export table buttons-->
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
<script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});

$("#search_name").keyup(function () {
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});
</script>

    </body>
</html>


