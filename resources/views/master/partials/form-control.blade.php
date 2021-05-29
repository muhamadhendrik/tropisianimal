<div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" name="judul_brt" id="judul" value="{{ old('judul_brt') ?? $berita->judul_brt }}"
        class="form-control">
    @error('judul_brt')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="berita">Berita</label>
    <textarea name="berita" id="berita" class="form-control">{{ old('berita') ?? $berita->berita }}</textarea>
    @error('berita')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="thumb_berita">Thumbnail Berita</label>
    <input type="file" name="thumbnail_brt" id="thumb_berita" class="form-control" >
    @error('thumbnail_brt')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">
    {{ $submit ?? 'Update' }}
</button>
