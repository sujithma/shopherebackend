<div class="modal fade editSale" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Sale</h4>
        </div>
        <div class="modal-body">
          {!! Form::label('Product', '', array('class' => 'col-md-4 control-label',)) !!}
        </div>
        <div class="modal-body">
          {!! Form::select('products.name', $products, array('class' => 'form-control', 'id' => 'editproduct')) !!}
        </div>
        <div class="modal-body">
          {!! Form::label('Date', '', array('class' => 'col-md-4 control-label')) !!}
        </div>
        <div class="modal-body">
          {!! Form::text('date','', array('class' => 'form-control input-md', 'id' => 'editdate')) !!}
        </div>
        <div class="modal-body">
          {!! Form::label('Quantity', '', array('class' => 'col-md-4 control-label')) !!}
        </div>
        <div class="modal-body">
          {!! Form::text('quantity','', array('class' => 'form-control input-md', 'id' => 'editquantity')) !!}
        </div>
        <div class="modal-body">
          {!! Form::label('Total Price', '', array('class' => 'col-md-4 control-label')) !!}
        </div>
        <div class="modal-body">
          {!! Form::text('totalPrice','', array('class' => 'form-control input-md', 'id' => 'edittotal')) !!}
        </div>
        <div class="modal-body">
          {!! Form::label('Unit Price', '', array('class' => 'col-md-4 control-label')) !!}
        </div>
        <div class="modal-body">
          {!! Form::text('unitPrice','', array('class' => 'form-control input-md', 'id' => 'editunit')) !!}
        </div>
        <div class="modal-footer">
          <a class="btn btn-primary editSaleSubmit">Save</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>    
    </div>
  </div>