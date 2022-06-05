<div class="technical-info">
    <div class="row">
        <div class="col-lg-6">
            <div class="tech-info-table">
                <table class="table table-bordered">
                    <tr>
                        <th>Марка</th>
                        <td>{{$car->brand->title}}</td>
                    </tr>
                    <tr>
                        <th>Класс</th>
                        <td>{{$car->class_car->title}}</td>
                    </tr>
                    <tr>
                        <th>Кузов</th>
                        <td>{{$car->body->title}}</td>
                    </tr>                        
                    <tr>
                        <th>Топливо</th>
                        <td>{{$car->engine->title}}</td>
                    </tr>
                    <tr>
                        <th>Коробка передач</th>
                        <td>{{$car->transmission->title}}</td>
                    </tr>
                </table>
            </div>
        </div>
        @if($car->options->count() != 0)
            <div class="col-lg-6">
                <div class="tech-info-list">
                    <ul>
                        @foreach($car->options as $option)
                            <li>{{$option->title}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
</div>