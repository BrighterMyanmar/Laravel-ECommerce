 @if($single)
 <div class="mb-3">
     <label for="file" class="form-label">Image</label>
     <input class="form-control" type="file" id="formFileMultiple" name="file">
 </div>
 @else 
  <div class="mb-3">
     <label for="files" class="form-label">Images</label>
     <input class="form-control" type="file" id="files" multiple name="files[]">
 </div>
 @endif

