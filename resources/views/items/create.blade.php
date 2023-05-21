<!DOCTYPE html>
<html>
<head>
    <title>Create Item</title>
</head>
<body>
    <h1>Create Item</h1>

    <form action="{{ route('items.create') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>
</html>
