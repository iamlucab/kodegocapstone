<table>
<tr>
<td>ID</td>
<td>Name</td>
<td>Last Name</td>
<td>Address</td>
<td>Birthday</td>
</tr>
<?php 
foreach ($users as $user) : ?>
<tr>
<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->lastname}}</td>
<td>{{$user->address}}</td>
<td>{{$user->bday}}</td>
 <td><a href="{{route('edit-user-form', $user->id)}}">Edit</a></td>


</tr>
<?php endforeach ?>
</table>


