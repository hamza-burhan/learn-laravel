<!-- example of view -->
@includeif('common.header', ['user' => $users[2]])

@foreach($users as $user)
<div>
    <h1>{{$user}}</h1>
</div>
@endforeach



<!-- example of component -->
<x-aler msg="message from user" class="success"/>
<x-aler msg="message from user" class="error"/>
<style>
    .error{
        background-color: red;
        color: white;
        padding: 20px;
        text-align: center;
        margin: 20px;
    }
    .success{
        background-color: green;
        color: white; 
        padding: 20px;
        text-align: center;
        margin: 20px;
    }
</style>