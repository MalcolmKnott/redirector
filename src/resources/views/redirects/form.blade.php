<div class="form-group{{ $errors->has('old_url') ? ' has-error' : '' }}">

    <label for="old_url">Old URL *</label>
    <input
        type="text"
        class="form-control"
        name="old_url"
        id="old_url"
        value="{{ old('old_url', $redirect->old_url) }}"
        placeholder="/old-urls-goes-here"
    >

    @if ($errors->has('old_url'))
        <span class="help-block">
            <strong>{{ $errors->first('old_url') }}</strong>
        </span>
    @endif

</div>


<div class="form-group{{ $errors->has('new_url') ? ' has-error' : '' }}">

    <label for="new_url">New URL *</label>
    <input
        type="text"
        class="form-control"
        name="new_url"
        id="new_url"
        value="{{ old('new_url', $redirect->new_url) }}"
        placeholder="/new-url-goes-here"
    >

    @if ($errors->has('new_url'))
        <span class="help-block">
            <strong>{{ $errors->first('new_url') }}</strong>
        </span>
    @endif

</div>


<div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">

    <label for="note">Note</label>
    <textarea name="note" id="note" class="form-control" rows="5">{{ old('note', $redirect->note) }}</textarea>

    @if ($errors->has('note'))
        <span class="help-block">
            <strong>{{ $errors->first('note') }}</strong>
        </span>
    @endif

</div>


<button type="submit" class="btn btn-success">{{ $submit_button_text }}</button>
<a href="{{ action('\Malcolmknott\Redirector\RedirectController@index') }}" class="btn btn-default">Cancel</a>