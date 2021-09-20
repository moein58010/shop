@extends('admin.layout.master')



@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ویرایش مشخصات</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('properties.update', $property)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <lable for="title">عنوان</lable>
                            <input type="text" class="form-control" name="title" id="title" value="{{$property->title}}">
                        </div>



                        <div class="form-group">
                            <lable for="property_group_id">گروه ویژگی</lable>
                            <select name="property_group_id" id="property_group_id" class="form-control">
                                <option value="" disabled selected>گروه ویژگی را انتخاب کنید ..</option>
                                @foreach($groups as $group)
                                    <option
                                        @if($group->id == $property->property_group_id)
                                            selected
                                        @endif
                                        value="{{$group->id}}">{{$group->title}}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="ثبت" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection