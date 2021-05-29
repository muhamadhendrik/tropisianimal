<div class="form-group">
    <label for="subjudul">Sub Judul</label>
    <textarea type="text" name="subjudul" id="subjudul" class="form-control">{{ old('subjudul') ?? $tentang->subjudul }}</textarea>
    @error('subjudul')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea type="text" name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi') ?? $tentang->deskripsi }}</textarea>
    @error('deskripsi')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="visi">Visi</label>
    <textarea type="text" name="visi" id="visi" class="form-control">{{ old('visi') ?? $tentang->visi }}</textarea>
    @error('visi')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="misi">Misi</label>
    <textarea type="text" name="misi" id="misi" class="form-control">{{ old('misi') ?? $tentang->misi }}</textarea>
    @error('misi')
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <button class="btn btn-primary round" type="submit">
        {{ $submit ?? 'Update' }}
    </button>
</div>
