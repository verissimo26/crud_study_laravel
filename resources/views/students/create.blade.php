<h1>Create New Student</h1>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Insert Name</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="">Insert Age</label>
        <input type="number" name="age" required>
    </div>
    <div>
        <label for="">Insert Description</label>
        <input type="text" name="description" required>
    </div>
    <div>
        <button type="submit">Create Student</button>
    </div>
</form>

<div>
    <a href="{{ route('students.index') }}">Back to List</a>
</div>
