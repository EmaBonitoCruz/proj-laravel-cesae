@if ($side == 'left')

    <div class="col-md-1 container-lines">
        <div class="red-line">.</div>
        <div class="orange-line">. </div>
        <div class="yellow-line"> .</div>
    </div>
    
@elseif($side == 'right')

    <div class="col-md-1 container-lines" style="justify-content: flex-end">
        <div class="yellow-line"> .</div>
        <div class="orange-line"> .</div>
        <div class="red-line">.</div>
    </div>
@endif