/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
//    alert('ddd')
    $('ul.menu li').hover(function(){
        if(!$(this).hasClass('actived')){
            $(this).addClass('active');
        }
        
    },function(){
        $(this).removeClass('active');
    })
    $('ul.menu li').click(function(){
        $('ul.menu li').removeClass('actived');
        $(this).addClass('actived');
    })
    $('#lastest-products').live('click',function(){
        $.post('products',{},function(data){
//            alert(data)
            $('#panel-center').html(data);
        })
    })
    $('#add-user-product').live('click',function(){
        $.post('products/form',{},function(data){
//            alert(data)
            $('#panel-center').html(data);
        })
    })
})

