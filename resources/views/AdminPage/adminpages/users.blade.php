@extends('AdminPage.adminlayout.adminlayout')
@section('content')
    <div class="table-user">
        <table>
            <thead>
                <tr>
                    <th>Account ID.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Date of Registration</th>
                    <th>Date Updated</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                {{-- foreach --}}
                @forelse ($data as $rows)
                    <tr>
                        <td>{{ $rows->id }}</td>
                        <td>{{ $rows->firstname }}</td>
                        <td>{{ $rows->lastname }}</td>
                        <td>{{ $rows->email }}</td>
                        <td>{{ $rows->phone }}</td>
                        <td>{{ $rows->created_at }}</td>
                        <td>{{ $rows->updated_at }}</td>
                        <td><img src="{{ asset('images/user/' . $rows->image) }}" width="70px" height="70px" alt="image">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>NaN</td>
                        <td>NaN</td>
                        <td>NaN</td>
                        <td>NaN</td>
                        <td>NaN</td>
                        <td>NaN</td>
                        <td>NaN</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@stop
