<h1>Students Index</h1>

<div>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $s)
                <tr>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->age }}</td>
                    <td>{{ $s->description }}</td>
                    <td>
                        <form action="{{ route('students.show', $s->id) }}" method="GET">
                            <button type="submit">Show</button>
                        </form>
                    </td>

                    <td>
                        <form action="{{ route('students.edit', $s->id) }}" method="GET">
                            <button type="submit">Edit</button>
                        </form>
                    </td>
                    <<td>
                        <form action="{{ route('students.destroy', $s->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
                        </form>
                        </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            
                <td>
                    <form action="{{ route('students.create') }}" method="GET">
                        <button type="submit">Create new student</button>
                    </form>
                </td>
            
        </tfoot>
    </table>
</div>
