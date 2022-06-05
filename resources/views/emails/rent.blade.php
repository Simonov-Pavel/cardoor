<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h1>Rent car</h1>
    <p>
        Пользователь {{$rent->user->name}} хочет арендовать автомобиль {{$rent->car->model}} 
        c {{$rent->startRent}} по {{$rent->endRent}}
    </p>
    <p>Связаться с {{$rent->user->name}} можно по телефону {{$rent->user->phone}} или email {{$rent->user->email}}</p>
    
    <p>Спасибо</p>
</body>
</html>