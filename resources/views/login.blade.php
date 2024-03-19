<x-layout>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <h1>Log In</h1>
    <form action="/login" method="POST">
        @csrf

        <div>
            <x-input title="Email" type='text' nombre='email'/>
            @error('email')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <x-input title="Password" type='password' nombre='password'/>
            @error('password')
            <p>{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="text-x1 border p-6">Log In</button>

    </form>
</x-layout>
