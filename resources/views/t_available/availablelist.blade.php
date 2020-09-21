<table border="1">
		<tr>
			<th>id</th>
			<th>area</th>
			<th>class</th>
			<th>subject</th>
			<th>tuition_provider</th>
		</tr>

	@foreach($alist as $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->area}}</td>
			<td>{{$users->class}}</td>
			<td>{{$users->subject}}</td>
			<td>{{$users->tuition_provider}}</td>
		</tr>
	@endforeach
	</table>
	