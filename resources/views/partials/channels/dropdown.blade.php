<label for="channel_id"></label>
<select name="annel_id" id="channel_id">
    @foreach($channels as $channel)
        <option value="{{ $channel->id }}">{{ $channel->name }}</option>
    @endforeach
</select>
