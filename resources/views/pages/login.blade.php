<div style="width:200px;margin-top:50px;margin-left:50px;">
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('log') }}" method="GET">
        @method('POST')
        @csrf
        
        <div class="mb-5">
            <label for="email" class="block">
                Email:
            </label>
            <input type="text" id="email" name="email" class="border border-gray-300 p-1">
        </div>
        <div class="mb-5">
            <label for="password" class="block">
                Password:
            </label>
            <input type="password" name="password" id="password" class="border border-gray-300 p-1">
        </div>
        <button class="rounded bg-blue-800 text-white px-4 py-2">
            Log in
        </button>
    </form>
</div>