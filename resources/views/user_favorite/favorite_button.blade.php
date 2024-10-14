@if (Auth::user()->is_favorite($micropost->id))
    {{-- アンフォローボタンのフォーム --}}
    <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-error btn-sm normal-case" 
            onclick="return confirm('id = {{ $micropost->id }} のお気に入りを外します。よろしいですか？')">お気に入り解除</button>
    </form>
@else
    {{-- フォローボタンのフォーム --}}
    <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-sm normal-case">お気に入り</button>
    </form>
@endif