<form method="post" action="{{$action}}" class="d-inline">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-sm {{$color ?? 'btn-danger'}}">
        <i class="fas fa-trash"></i>
    </button>

</form>