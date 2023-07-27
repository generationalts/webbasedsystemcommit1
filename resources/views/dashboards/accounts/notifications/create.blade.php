<form action="{{ route('notifications.store') }}" method="post">
    @csrf
    <label for="recipient">Recipient:</label>
    <select name="recipient" id="recipient">
        <option value="all">All Users</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <br>
    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="4"></textarea>
    <br>
    <input type="submit" value="Send">
</form>
