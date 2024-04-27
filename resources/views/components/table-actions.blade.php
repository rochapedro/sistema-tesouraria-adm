<td style="width: 95px">
    <div class="btn-group">
        @isset($editUrl)
            <a href="{{ $editUrl }}">
                <button type="button" class="btn btn-warning btn-sm mr-2 rounded">
                    <i class="fas fa-edit"></i>
                </button>
            </a>
        @endisset

        <form action="{{ $destroyUrl }}" method="post" onsubmit="confirmationDestroy(event, this);">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger btn-sm rounded">
                <i class="fas fa-trash"></i>
            </button>
        </form>

        {{ $slot }}
    </div>
</td>
