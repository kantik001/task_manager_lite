@extends('layouts.app')
@section('content')

    <div class="grid col-span-full">
        <h1 class="max-w-2xl mb-4 text-4xl leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
            {{ __('layout.statuses_header') }} </h1>
        @auth()
            <div>
                @csrf
                <a href="{{ route('statuses.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('layout.create_button_task_statuses') }}           </a>
            </div>
        @endauth
        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left" style="text-align: left">
            <tr>
                <th>{{ __('layout.table_id') }}</th>
                <th>{{ __('layout.table_name') }}</th>
                <th>{{ __('layout.table_date_of_creation') }}</th>
                @auth()
                    <th>{{ __('layout.table_actions') }}</th>
                @endauth
            </tr>
            </thead>
            <tbody>
            @foreach($statuses as $status)
                <tr class="border-b border-dashed text-left">
                    <td>{{ $status->id }}</td>
                    <td>{{ $status->name }}</td>
                    <td>{{ $status->created_at }}</td>
                    @auth()
                        <td>
                            <a
                                class="text-red-600 hover:text-red-900"
                                rel="nofollow"
                                data-method="delete"
                                data-confirm="{{ __('layout.table_delete_question') }}"
                                href="{{ route('statuses.destroy', $taskStatus) }}"
                            >
                                {{ __('layout.table_delete') }}
                            </a>
                            <a class="text-blue-600 hover:text-blue-900"
                               href="{{ route("statuses.edit", $taskStatus) }}"
                            >
                                {{ __('layout.table_edit') }}
                            </a>
                        </td>
                    @endauth
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @auth()
        <div class="mt-4 grid col-span-full">{{ $statuses->links() }}</div>
    @endauth
@endsection
