@foreach($courses as $course)
	<tr>
              <td>{{$course->code}}</td>
              <td>{{$course->name}}</td>
              <td>{{$course->credit}}</td>
              <td>{{$course->year}}</td>
              <td>{{$course->term}}</td>
            </tr>

@endforeach