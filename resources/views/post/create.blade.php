<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new post</title>
</head>
<body>

<form action="">
    <label for="channel_id"></label><select name="annel_id" id="channel_id">
        @foreach($channels as $channel)
            <option value="{{ $channel->id }}">{{ $channel->name }}</option>
        @endforeach
    </select>
</form>

</body>
</html>
