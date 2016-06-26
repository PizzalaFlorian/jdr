$(function(){
    $(':input').keyup(function() {
        var id = $('#p_id').html();
        var selectorID = $(this).attr('id');
        var selectorClass = $(this).attr('class');
        console.log("select "+selectorID);
        var content = $(this).val();
        console.log("contnue "+content);
        if(content!="" && selectorClass != "regular munition" && selectorClass != "quantite"){
            $.ajax({  
                    url : '../edit/'+id,
                    type : 'POST',
                    data : "id=" + id +
                          '&'+selectorID+'=' + content,
                    dataType : 'html', 
                    success : function(code_html, statut){ 
                        console.log("succes perso")
                }
            });
        }
        if(content!="" && selectorClass == "regular munition" && selectorClass != "quantite"){
            $.ajax({  
                    url : '../../armes/edit/'+selectorID,
                    type : 'POST',
                    data : 'munition=' + content,
                    dataType : 'html', 
                    success : function(code_html, statut){ 
                        console.log("succes munition")
                }
            });
        }
 
    });
    $(':input').click(function() {
        var id = $('#p_id').html();
        var selectorID = $(this).attr('id');
        var selectorClass = $(this).attr('class');
        //console.log("select "+selectorID);
        var content = $(this).val();
        //console.log("contnue "+content);
        if(content!="" && selectorClass != "regular munition" && selectorClass != "quantite"){
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