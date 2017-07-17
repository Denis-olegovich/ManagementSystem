$(document).ready(function() {

$('#selectId').on('change',function() {
       var val_name = $('#selectId option:selected').text();
       var val_name_rp = $('#selectId option:selected').attr('label');
       var val_id = $('#selectId').val();
       $('#text_name_rp').val(val_name_rp);
       $('#text_name').val(val_name); 
       $('#text_id_position').val(val_id);    
    });

$('#selectIdprm').on('change',function() {
	   var val = $('#selectIdprm').val();
       var val_value = $('#selectIdprm option:selected').text();
       var val_name = $('#selectIdprm option:selected').attr('label');
       
       alert(val);
       $('#text_name_parameter').val(val_name);
       $('#text_value_parameter').val(val_value); 
       $('#id_parameter').val(val);    
    });

});
