@include('common.errors')
@if (count($errors) > 0)
    <!-- �����~�M�� -->
    <div class="alert alert-danger">
        <strong>�u�r�I�X�F�ǰ��D�I</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
