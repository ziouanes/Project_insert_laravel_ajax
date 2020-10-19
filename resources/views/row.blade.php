<tr id="{{$row->id}}">
    <td>{{$row->name}}</td>
    <td>{{$row->email}}</td>
    <td>{{$row->position}}</td>
    <td>{{$row->mobile}}</td>
    <td>
        <button class="btn btn-info edit" data-route="{{url('/edit-client/'.$row->id)}}" data-toggle="modal" data-target="#exampleModal2">Edit <i class="fa fa-edit"></i> </button>
        <button class="btn btn-danger delete" data-route="{{url('/delete-client/'.$row->id)}}" >Delete <i class="fa fa-times"></i> </button>
    </td>
</tr>