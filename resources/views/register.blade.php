<x-layout>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h1>Register</h1>
    <form action="/register" method="post">
    @csrf

    <div>
        <label for="">Name</label>
        <input type="text" name="name">
        @error('name')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="">Email</label>
        <input type="text" name="email">
        @error('email')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="Password">Password</label>
        <input type="password" name="password">
        @error('password')
            <p>{{$message}}</p>
        @enderror
    </div>

    <div>
        <label for="">Birthday</label>
        <input type="date" name="birthday">
        @error('birthday')
            <p>{{$message}}</p>
        @enderror
    </div>
    <button type="submit" class="text-x1 border p-6">Send</button>
    </form>
</x-layout>

