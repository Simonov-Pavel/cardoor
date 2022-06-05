<form action="{{route('rent', $car->slug)}}" method="GET">
    @if(isset($_GET['startRent']))
        <input type="hidden" name="startRent" value="{{ $_GET['startRent'] }}">
    @endif
    @if(isset($_GET['endRent']))
        <input type="hidden" name="endRent" value="{{ $_GET['endRent'] }}">
    @endif
    <button type="submit" class="rent-btn">Арендовать</button>
</form>
