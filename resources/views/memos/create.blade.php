@extends('layout')
@section('content')

<h1 class="title">メモ作成画面</h1>

	<form method="POST" action="/memos">
		@csrf
		<div class="field">
			<label class="label">ID</label>
			<div class="control">
				<input type="text" class="form-control" name="id" placeholder="ID" value="{{ old('id') }}">
			</div>
		</div>

        <div class="field">
			<label class="label">Sub ID</label>
			<div class="control">
				<input type="text" class="form-control" name="subid" placeholder="Sub ID" value="{{ old('subid') }}">
			</div>
		</div>

		<div class="field">
			<label class="label">メモ</label>
			<textarea name="memo" class="form-control" placeholder="メモ" >{{ old('memo') }}</textarea>
		</div>

		<div class="field">
			<button type="submit" class="btn btn-primary mt-2">メモ作成</button>
		</div>

	</form>

@endsection
