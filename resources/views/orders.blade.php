@foreach($orders as $order)
            <ul class="list-group">
                <li class="list-group-item">Fajta: {{$order->fajta}}</li>
                <li class="list-group-item">Meret: {{$order->meret}}</li>
            </ul>
    @endforeach