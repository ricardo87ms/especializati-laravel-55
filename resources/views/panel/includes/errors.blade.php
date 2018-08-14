<div class="content-din">
    @if (isset($errors) && $errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $errors)
                <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>