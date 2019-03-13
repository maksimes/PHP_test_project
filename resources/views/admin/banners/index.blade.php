@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

        <a href="{{route('admin.banner.create')}}" class="btn btn-primary pull-right"><i class="fa
        fa-plus-square-0"></i>Создать баннер</a>
        <table class="table table-striped">
            <thead>
            <th>Название</th>
            <th>Показывать</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($banners as $banner)
                <tr>
                    <td>{{$banner->title}}</td>
                    <td>{{$banner->added}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить')){return true}else{return false}" action="{{route('admin.banner.destroy', $banner)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}
                            <a class="btn btn-default" href="{{route('admin.banner.edit', $banner)}}">Редактировать<i class="fa
                            fa-edit"></i></a>
                            <button type="submit" class="btn"><i fa fa-trash-o></i>Удалить</button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$banners->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>


</div>

@endsection