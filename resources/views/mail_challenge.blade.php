<!DOCTYPE html>
<html>
<head>
    <style>

        .center_div {
            border: 1px solid gray;
            margin-left: auto;
            margin-right: auto;
            width: 90%;
            background-color: #d0f0f6;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>

<div class="center_div">
    <h1>{{__('challenge.mail_send',['user_name'=>$log->task->user->name,'task_name'=>$log->task->name])}}</h1>
    <p>{{$log->comments}}</p>
</div>

</body>
</html>
