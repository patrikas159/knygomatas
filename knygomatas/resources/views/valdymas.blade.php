
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/valdymas.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
<tr>
<td colspan="2">
    <div class="header_logo">
        <img src="https://www.kaunas.mvb.lt/wp-content/uploads/2018/10/logotipas-didelis-png-2.png" alt="logo" width="280px" height="120px">
    </div>
</td>
</tr>

 <h2>Užsakymų sarašas</h2>
 <div class="table-wrapper">
     <table class="fl-table">
         <thead>
         <tr>
             <th>Skaitytojo bilietas</th>
             <th>Skaitytojo numeris</th>
             <th>Būsena</th>
             <th>Valdymas</th>

         </tr>
         </thead>
         <tbody>
            @foreach($data as $item)


                 <td>{{$item->reader_id}}</td>
                 <td>{{$item->reader_phone}}</td>
                 <td><input data-id="{{$item->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Atlikta" data-off="Laukiama" {{ $item->statuses ? 'checked' : '' }}>
                 </td>

         <td>

             <form action="{{ route('knygomatas.destroy', $item->id) }}" style="display: inline" method="POST">
                 @csrf
                 @method('DELETE')

                 <button type="submit" class="btn btn-danger">
                     Šalinti
                     <i class="fa fa-trash"></i>
                 </button>
             </form>


                 </td>

             </tr>
            @endforeach



         </tbody>
     </table>
 </div>
</body>
<script>
    $(function() {
        $('.toggle-class').change(function() {
            var statuses = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatus',
                data: {'id': id, 'statuses': statuses},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })
</script>
</html>

