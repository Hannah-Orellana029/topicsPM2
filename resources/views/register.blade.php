<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<form action="/register" method="post">
    @csrf
    <h1>Register</h1>
    <div>
        <label for="">Name</label>
        <input type="text" name="name" >
        @error("name")
        <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="">Email</label>
        <input type="text" name="email">
        @error("email")
        <p>{{ $message }}</p>
        @enderror
    </div>

</div>
<div>
<label for="">Password</label>
<input type="text" name="password">
         @error("password")
         <p>{{ $message }}</p>
         @enderror
</div>

<div>
    <label for="">Birthday</label>
    <input type="date" name="birthday">
    @error("birthday")
    <p>{{ $message }}</p>
    @enderror
</div>

<button type="submit">Send</button>
</div>
