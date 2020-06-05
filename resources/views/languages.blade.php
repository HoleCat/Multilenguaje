@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('translations.create') }}">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label>Key:</label>
                <input type="text" name="key" class="form-control" placeholder="Enter Key...">
            </div>
            <div class="col-md-4">
                <label>Value:</label>
                <input type="text" name="value" class="form-control" placeholder="Enter Value...">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </div>
    </form>


    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>Key</th>
            @if($languages->count() > 0)
                @foreach($languages as $language)
                    <th>{{ $language->name }}({{ $language->code }})</th>
                @endforeach
            @endif
            <th width="80px;">Action</th>
        </tr>
        </thead>
        <tbody>
            @if($columnsCount > 0)
                @foreach($columns[0] as $columnKey => $columnValue)
                    <tr>
                        <td><a href="#" class="translate-key" data-title="Enter Key" data-type="text" data-pk="{{ $columnKey }}" data-url="{{ route('translation.update.json.key') }}">{{ $columnKey }}</a></td>
                        @for($i=1; $i<=$columnsCount; ++$i)
                        <td><a href="#" data-title="Enter Translate" class="translate" data-code="{{ $columns[$i]['lang'] }}" data-type="textarea" data-pk="{{ $columnKey }}" data-url="{{ route('translation.update.json') }}">{{ isset($columns[$i]['data'][$columnKey]) ? $columns[$i]['data'][$columnKey] : '' }}</a></td>
                        @endfor
                        <td><button data-action="{{ route('translations.destroy', $columnKey) }}" class="btn btn-danger btn-xs remove-key">Delete</button></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection