<link rel="stylesheet" type="text/css" href="{{asset('css/valdymas.css')}}">
<form action="{{ route('knygomatas.update', $knygomatas->id) }}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="description" class="form-label">Status</label>
    <select name="status" id="status" class="form-control">
        @foreach ($statuses as $status)
            <option value="{{ $status['value'] }}" {{  $knygomatas->status === $status['value'] ? 'selected' : '' }}>{{ $status['label'] }}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-success">
    <i class="fa fa-check"></i>
    Save
</button>
</form>

