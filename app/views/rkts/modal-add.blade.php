
{{-- Modal dialog section --}}
<div class="modal fade" id="rktModalAdd" tabindex="-1" role="dialog" aria-labelledby="rktModalAddLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="rktModalAddLabel">Tambah Penetapan Kinerja</h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => 'rkts', 'id' => 'form-rkt-add')) }}

        <div class="form-group">
          {{ Form::label('biro_id', 'Biro') }}
          {{ Form::select('biro_id', $biro, 0, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('sasaran', 'Sasaran Strategis') }}
          {{ Form::textarea('sasaran', null, array('class' => 'form-control', 'rows' => 3)) }}
        </div>

        {{ Form::submit('Simpan', array('class' => 'btn btn-primary', 'id' => 'btn-save-rkt')) }}

        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>{{-- End Modal dialog section --}}