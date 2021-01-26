<h1>Información del usuario</h1>
@isset($user)
El id es: {{ $user->id}} <br/>
El nombre es: {{ $user->name}} <br/>
El email es:  {{ $user->email}} <br/>    
@endisset


