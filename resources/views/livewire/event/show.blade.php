<div>
    @if (isset($events))
    <div class="row">
        @foreach ($events as $event)

        <div class="col-3 card text-white bg-secondary mb-3 ml-2" style="max-width: 18rem;">
            <div class="card-header">{{$event->name}}</div>
            <div class="card-body">
                <h5 class="card-title">{{$event->street}}</h5>
                <p class="card-text">{{$event->description}}.</p>
            </div>
            <a class="text-end text-white" href="#">detalhar</a>
        </div>
        @endforeach
    </div>
    @else
    Sem eventos até o momento
    @endif
</div>