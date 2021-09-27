<x-app-layout>
<div class="container mt-5">
    <div class='text-center'>
        <h1 class='text-primary'><b>Email Notification</b></h1>
    </div>
    @if (Session::get('msg'))
    <div class='alert alert-info'>
            {{ Session::get('msg') }}    
    </div>
    @endif
    <form method="post" action="send">
        @csrf
        <label>Email:</label>
        <input class="form-control" type="text" name="email">
        <label>Message:</label>
        <input class="form-control" type="text" name="message">
        <div class='mt-3'>
            <button type='submit' class='btn btn-primary'>Send Email</button>
        </div>
        
    </form>
</div>
</x-app-layout>
