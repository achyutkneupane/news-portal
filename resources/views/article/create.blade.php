<x-back-layout>
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Enter Title for Article" class="form-control" value="{{ old('title') }}" />
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" placeholder="Enter Slug for Article" class="form-control" value="{{ old('slug') }}" />
            @error('slug')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-3">
            <textarea id="articlecontent" name="content"></textarea>
        </div>
        <div class="mt-3">
            <label for="image" class="form-label">Article Image</label>
            <input type="file" id="image" name="image" class="form-control">
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-3">
            <label for="category">Category</label>
            <select name="category_id" id="category" class="form-select">
                <option value="" disabled selected>Select one category</option>
                @foreach(\App\Models\Category::get() as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </form>

    @section('scripts')
        <script src="https://cdn.tiny.cloud/1/{{ env('TINY_MCE_SECRET') }}/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea#articlecontent',
                plugins: 'code table lists',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
            });
        </script>
    @endsection
</x-back-layout>
