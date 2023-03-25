<table class="table table-bordered">
    <tr>
        <th>Nama User</th>
        <th>Nama User</th>
        <th>Nama User</th>
        <th>Nama User</th>
        <th>Nama User</th>
        <th>Nama User</th>
    </tr>
    @foreach ($aktiva as $no => $a)
    <tr>
        <td>{{$a->email}}</td>
        <td>{{$a->email}}</td>
        <td>{{$a->email}}</td>
        <td>{{$a->email}}</td>
        <td>{{$a->email}}</td>
        <td>{{$a->email}}</td>
    </tr>
    @endforeach
</table>