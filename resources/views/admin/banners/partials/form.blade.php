<label >Статус</label>
<select class="form-control" name="added">
    @if (isset($banner->id))
        <option value="0" @if ($banner->added ==0) selected="" @endif>Не показывать</option>
        <option value="1"@if ($banner->added ==1) selected="" @endif>Показывать</option>
    @else
        <option value="0">Не показывать</option>
        <option value="1">Показывать</option>
    @endif
</select>

<label for="">Название</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок баннера"
       value="{{$banner->title ?? ''}}" required>

<label for="">Текст</label>
<input type="text" class="form-control" name="text" placeholder="Текст баннера"
       value="{{$banner->text ?? ''}}" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="{{$banner->slug ?? 'Автоматическая генерация'}}"
       value="" readonly="">

<input class="btn btn-primary" type="submit" value="Сохранить">