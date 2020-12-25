@extends('layout')
@section('content')

    <div class="flex items-center h-screen w-full bg-teal-lighter">
        <div class="w-full bg-white rounded shadow-lg p-8 m-4">
            <h1 class="title mt-2">メモ作成画面</h1>

            <form method="POST" action="/memos">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="font-bold text-lg text-grey-darkest">ID</label>
                    <input type="text" class="border py-2 px-3 text-grey-darkest" name="id" placeholder="ID" value="{{ old('id') }}">
                </div>

                <div class="flex flex-col mb-4">
                    <label class="font-bold text-lg text-grey-darkest">Sub ID</label>
                    <input type="text" class="border py-2 px-3 text-grey-darkest" name="subid" placeholder="Sub ID" value="{{ old('subid') }}">
                </div>

                <div class="flex flex-col mb-4">
                    <label class="font-bold text-lg text-grey-darkest">メモ</label>
                    <textarea name="memo" class="border py-2 px-3 text-grey-darkest rounded-lg" placeholder="メモ" >{{ old('memo') }}</textarea>
                </div>

                <div class="flex flex-col mb-4">
                    <button type="submit" class="btn btn-primary mt-2">メモ作成</button>
                </div>

            </form>
        </div>

    </div>

@endsection
