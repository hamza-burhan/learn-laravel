<!-- example of view -->
@includeif('common.header', ['user' => $users[2]])

@foreach($users as $user)
<div>
    <h1>{{$user}}</h1>
</div>
@endforeach