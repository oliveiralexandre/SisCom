<div class="table-responsive">                        
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
<div class="input-field">
				<select class="form-control"name="permissao_id">
					@foreach($produtos as $produto)
					<option value="{{$produto->produto}}">{{$produto->produto}}</option>
					@endforeach
				</select>
			</div><br>
	