var week = document.createDocumentFragment();
var counter = 0;
var newHour;
for (h = 0; h < 7; h += 1){    
    var day = document.createElement('div');
    day.setAttribute('class', 'col mark');
      
    var j;
    for (j = 0; j < 12; j = j+1) {
        counter += 1;
        var newHour = document.createElement('div');
        newHour.innerHTML = j+8+':00';        
        newHour.setAttribute('class', 'row mark');
        newHour.setAttribute('id', counter);
        newHour.onclick = function(){onClick(this.getAttribute('id'))};
        phpLayout(counter);
        day.appendChild(newHour);
        
        var availability = document.createElement('input');
        availability.setAttribute('type', 'submit');
        availability.setAttribute('name', 'hour'+counter);
        availability.value = 'available';
        //newHour.appendChild(availability);   
        
        
        
    }
    week.appendChild(day);   
}
document.getElementById('weekbox').appendChild(week);

function phpLayout(id){    
    $.ajax({
        type: 'POST',
        url:'php_server/mysqlConn.php',
        data: {ID: id},
        success: function(data){                
            //Layout has to go by index because jacascript loops continue without waiting vor the ajax request to finish
            var hour = $('#'+id);
            hour.css('background', 'green');
            //hour.css('backround', 'webkit-linear-gradient(green,red)');
            //hour.css('bsckground', '-o-linear-gradient');
            $fillBreak = data/4*100+'%';
            hour.css('background', 'linear-gradient(to right, #52D017 '+$fillBreak+', #E77471 '+$fillBreak);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#welcome').html(textStatus);
            alert('Database connection error!');
        }
    });
}

function onClick(id){
    $(document).ready(function(){
        $.ajax({
            type: 'POST',
            url: 'php_server/updateDB.php',
            data: {ID: id},
            success: function(data){
                phpLayout(id);
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('db connection error');
            }
        });
    })
}

/*$('#welcome').on('click', function(e){
                //alert('welcome');
                $.ajax({
                    type: 'POST',
                    url:'mysqlConn.php',
                    data: {ID: 1},

                    success: function(data){
                        $('#welcome').html(data);               
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#welcome').html(textStatus);
                        alert('Bummer: there was an error!');
                    }
                });

            })
    })*/