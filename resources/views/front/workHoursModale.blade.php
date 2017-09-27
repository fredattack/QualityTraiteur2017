<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nos heures d'ouverture</h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table style="width: 100%">
                        @php($horaire = \App\WorkHour::all())

                        @foreach($horaire as $jour)
                            <tr> <td style="width:30% "><h4 >{{$jour->day}}:</h4></td>
                                @if($jour->startTime==$jour->endTime)
                                    <td style="width:50%"><h4 class="text-center" style="font-weight: bold">Fermé</h4></td>
                                @else <td style="width:50%"><p class="text-center" >{{$jour->startTime}} - {{$jour->endTime}}</p></td>
                                @endif
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>

        </div>

    </div>
</div>