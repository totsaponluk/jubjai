<script>
$(function(){
//    $('#form_add_product').live('submit',function(){
//        return false;
//    });
//    $('#bt-submit-form').live('click',function(){
//        var productName = $('[name="product_name"]').val();
////        alert('ddd')
//        $.post('/products/add',{product_name:productName},function(data){
//            $('#panel-center').html(data);
//            
//        })
//        return false;
//    })
})
</script>
<?php echo $method;?>
<?php echo Form::open('',array('id'=>'form_add_product'));?>
<label>Product name:</label><input name="product_name" /><br/>
<input id="bt-submit-form" type="submit" value="submit"/>
<!--<label>Price:</label><input name="price" />-->
<?php echo Form::close();?>
