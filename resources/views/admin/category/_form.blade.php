<div class="card-body">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" value="{{ old('name',isset($category)?$category->name:null) }}" id="name" placeholder="Enter category name">
      @error('name') <i class="text-danger">{{ $message }}</i> @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter category description">{{ old('description',isset($category)?$category->description:null) }}</textarea>
        @error('description') <i class="text-danger">{{ $message }}</i> @enderror
    </div>
    <div class="form-group">
        <div class="form-check">
            <input name="is_featured" type="checkbox" @if(old('is_featured',isset($category)?$category->is_featured:null) == 1) checked @endif class="form-check-input" value="1" id="is_featured">
            <label for="is_featured">Is_Featured ?</label>
        </div>
        @error('is_featured') <i class="text-danger">{{ $message }}</i> @enderror
    </div>
      <div class="form-group">
        <label>Status</label>
        <div class="form-check">
            <input name="status" type="radio" @if(old('status',isset($category)?$category->status:null) == 'Active') checked @endif class="form-check-input" value="Active" id="active">
            <label for="active">Active</label>
        </div>
        <div class="form-check">
            <input name="status" type="radio" @if(old('status',isset($category)?$category->status:null) == 'Inactive') checked @endif class="form-check-input" value="Inactive" id="inactive">
            <label for="inactive">Inactive</label>
        </div>
        @error('status') <i class="text-danger">{{ $message }}</i> @enderror
      </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" id="image" placeholder="Upload Image">
        @error('image') <i class="text-danger">{{ $message }}</i> @enderror
    </div>
    @if(isset($category))
       <img src="{{ asset($category->image) }}" alt="" width="10%">
    @endif
  </div>