<form action="{{ route('notifications.store') }}" method="post">
    @csrf
    <label for="recipient">Recipient:</label>
    <select name="recipient" id="recipient">
        <option value="all">All Users</option>
        @foreach($users as $user)
            @if($user->role == 1 || $user->role == 0 || $user->role == 2)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endif
        @endforeach
    </select>
    <br>
    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="4"></textarea>
    <br>
    <input type="submit" value="Send">
</form>
