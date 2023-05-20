@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session("success"))
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg w-4/5 mx-auto dark:bg-green-200 dark:text-green-800">
        <span class="font-medium">{{session("success")}}</span>
    </div>
@endif

@if(session("error"))
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800">
        <span>{{session("error")}}</span>
    </div>
@endif
