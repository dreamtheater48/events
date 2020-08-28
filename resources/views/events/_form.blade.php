<div class="form-group ">
    <label for="title" class="control-label "></label>
    <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title" value="{{ old('title') ? old('title') : $event->title}}" placeholder="Titre de l'evenement">
    {!! $errors->first('title','<span class="error">:message</span>') !!}
</div>

<div class="form-group">
    <label for="description" class="control-label sr-only"></label>
    <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" name="description" placeholder="description de evenement">{{ old('description') ? old('description') : $event->description }}</textarea>
    {!! $errors->first('description','<span class="error">:message</span>') !!}
</div>

<div class="form-group">
<input type="submit" value="{{ $submitButtonText }}" class="btn btn-primary btn-block">
</div>