<div>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Amount ($)</th>
            <th>Message</th>
        </tr>
        @foreach ($donations as $donate)
        <tr>
            <td>{{ $donate->name }}</td>
            <td>{{ $donate->email }}</td>
            <td>{{ $donate->amount }}</td>
            <td>{{ $donate->message }}</td>
        </tr>
        @endforeach
    </table>
</div>
