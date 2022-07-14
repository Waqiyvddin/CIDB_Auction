<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Role Management</h2>
            </div>
            <div>
                <label for="product_title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Insert
                    new role</label>

                <div class=" flex flex-row mb-2">
                    <input type="text" wire:model="role_name"
                        class="w-1/2 block rounded-lg border border-gray-300 bg-gray-50 px-2 text-sm text-gray-900  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                        placeholder="Role name" required />


                    {{-- @can('role-create') --}}
                    <a wire:click="save_new_role"
                        class="px-1 py-1 m-1 text-sm text-white dark:text-blue-500 bg-blue-400 rounded cursor-pointer">Create
                        New Role</a>


                    {{-- @endcan --}}
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            {{-- <th>No</th> --}}
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i=0;
        @endphp
        @foreach ($list_roles as $key => $role)
            <tr>
                {{-- <td>{{ ++$i }}</td> --}}
                <td>{{ $role->name }}</td>
                <td>
                    @can('role-edit')
                        <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                    @endcan
                    @can('role-delete')
                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>

    {{-- {!! $list_roles->render() !!} --}}

</div>
