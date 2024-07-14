<title>Show Student</title>

<div>
    <h1>Student Details</h1>
    <div>
        <label>Name</label>
        <p>{{ $student->name }}</p>
    </div>
    <div>
        <label>Age</label>
        <p>{{ $student->age }}</p>
    </div>
    <div>
        <label>Description</label>
        <p>{{ $student->description }}</p>
    </div>

    <div>
        <form action="{{ route('students.index') }}" method="GET">
            <button type="submit">Back to List</button>
        </form>
    </div>

    <div>
        <form action="{{ route('students.create') }}" method="GET">
            <button type="submit">Create new student</button>
        </form>
    </div>
</div>
