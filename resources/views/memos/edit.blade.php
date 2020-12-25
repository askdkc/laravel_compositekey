@extends('layout')

@section('content')

    <div class="flex items-center h-screen w-full bg-teal-lighter">
        <div class="w-full bg-white rounded shadow-lg p-8 m-4">
            <h1 class="title mt-2">Memoを編集</h1>

            <form method="POST" action="/update/">
                @method('PATCH')
                @csrf


                <div class="flex flex-col mb-4">
                    <label class="font-bold text-lg text-grey-darkest">ID</label>
                    <input readonly type="text" class="border-b-2 border-dashed py-2 px-3 text-grey-darkest" name="id" value="{{ $memo->id }}" required>
                </div>

                <div class="flex flex-col mb-4">
                    <label class="font-bold text-lg text-grey-darkest">Sub ID</label>
                    <input readonly type="text" class="border-b-2 border-dashed py-2 px-3 text-grey-darkest" name="subid" value="{{ $memo->subid }}" required>
                </div>

                <div class="flex flex-col mb-4">
                    <label class="font-bold text-lg text-grey-darkest">メモ</label>
                    <textarea name="memo" class="border py-2 px-3 text-grey-darkest rounded-lg" required>{{ $memo->memo }}</textarea>
                </div>

                <div class="flex flex-col mb-4">
                    <button type="submit" class="btn btn-primary mt-2">更新</button>
                </div>

            </form>
            <br>
        </div>
    </div>


@endsection
