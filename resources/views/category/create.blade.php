<x-back-layout>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Enter Title for Category" class="form-control" />
        </div>
        <div class="form-group mt-3">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" placeholder="Enter Slug for Category" class="form-control" />
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Enter Description" class="form-control"></textarea>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </form>
</x-back-layout>
