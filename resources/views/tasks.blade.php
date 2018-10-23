// resources/views/tasks.blade.php

@extends('layouts.app')

@section('content')

    <!-- Bootstrap �˪O... -->

    <div class="panel-body">
        <!-- ������ҿ��~ -->
        @include('common.errors')

        <!-- �s���Ȫ���� -->
        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- ���ȦW�� -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- �W�[���ȫ��s-->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> �W�[����
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- �N��G�ثe���� -->
@endsection