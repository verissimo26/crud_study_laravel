<h1>Edit Student</h1>

<form action="{{route('students.update', $student)}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="">Insert new name: </label>
        <input type="text" name="name" value="{{$student->name}}" placeholder="New name">
    </div>
    
    <div>
        <label for="">Insert new age: </label>
        <input type="text" name="age" value="{{$student->age}}" placeholder="New age">
    </div>

    <div>
        <label for="">Insert new description: </label>
        <input type="text" name="description" value="{{$student->description}}" placeholder="New description">
    </div>
    <button type="submit">Submeter</button>
</form>