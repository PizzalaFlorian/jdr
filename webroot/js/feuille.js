$(function(){
    $(':input').keyup(function() {
        var id = $('#p_id').html();
        var selectorID = $(this).attr('id');
        //console.log("select "+selectorID);
        var content = $(this).val();
        //console.log("contnue "+content);
        if(content!=""){
            $.ajax({  
                    url : '../edit/'+id,
                    type : 'POST',
                    data : "id=" + id +
                          '&'+selectorID+'=' + content,
                    dataType : 'html', 
                    success : function(code_html, statut){ 
                        console.log("succes")
                }
            });
        }
 
    });
    $(':input').click(function() {
        var id = $('#p_id').html();
        var selectorID = $(this).attr('id');
        //console.log("select "+selectorID);
        var content = $(this).val();
        //console.log("contnue "+content);
        if(content!=""){
            $.ajax({  
                    url : '../edit/'+id,
                    type : 'POST',
                    data : "id=" + id +
                          '&'+selectorID+'=' + content,
                    dataType : 'html', 
                    success : function(code_html, statut){ 
                        console.log("succes")
                }
            });
        }
 
    });
});