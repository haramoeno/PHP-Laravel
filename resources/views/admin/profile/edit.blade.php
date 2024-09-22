@extends('layouts.profile')
@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール</h2>
                <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="body">name</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="name" rows="20" value="{{ old('name') }}"></textarea></textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2" for="body">gender</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="gender" rows="20" value="{{ old('gender') }}"></textarea></textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2" for="body">hobby</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="20" value="{{ old('hobby') }}"></textarea></textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2" for="body">introduction</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20" value="{{ old('introduction') }}"></textarea></textarea>
                        </div>
                    </div>
                    <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection