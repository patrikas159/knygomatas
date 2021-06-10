
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/valdymas.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
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
                 <td>@if ($item->status ==="Laukiama")
                 Laukiama
                     @else
                  Atlikta
                 </td>
                 @endif

         <td>

             <form action="{{ route('knygomatas.edit', $item->id) }}" method="POST">
                 @csrf
                 @method('PUT')
                 <div class="mb-3">

                     <select name="status" id="status" class="form-control">
                         @foreach ($item as $statuses)
                             <option value="{{ $statuses['value'] }}" {{  $item->status === $statuses['value'] ? 'selected' : '' }}>{{ $statuses['label'] }}</option>

                         @endforeach
                     </select>
                 </div>
             </form>


             <form action="{{ route('knygomatas.destroy', $item->id) }}" style="display: inline" method="POST" onsubmit="return confirm('Are you sure to delete ?')">
                 @csrf
                 @method('DELETE')

                 <button type="submit" class="btn btn-danger">
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
</html>

