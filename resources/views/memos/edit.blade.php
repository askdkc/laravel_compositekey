@extends('layout')

@section('content')

	<h1 class="title">Memoを編集</h1>

	<form method="POST" action="/update/">
		@method('PATCH')
		@csrf


		<div class="field">
			<label class="label">ID</label>

			<div class="control">
                <input readonly type="text" class="form-control" name="id" value="{{ $memo->id }}" required>
			</div>
		</div>

        <div class="field">
			<label class="label">Sub ID</label>

			<div class="control">
                <input readonly type="text" class="form-control" name="subid" value="{{ $memo->subid }}" required>
			</div>
		</div>

		<div class="field">
			<label class="label">メモ</label>

			<div class="control">
                <textarea name="memo" class="form-control" required>{{ $memo->memo }}</textarea>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<button type="submit" class="btn btn-primary mt-2">更新</button>
			</div>
		</div>

	</form>
	<br>


@endsection
