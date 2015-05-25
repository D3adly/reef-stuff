$(document).ready(function(){
    $('#water-test-submit').click(function(e){
        e.preventDefault();
        var params = {};
        params.salinity = $('#wp-salinity').val();
        params.temperature = $('#wp-temperature').val();
        params.amonia = $('#wp-amonia').val();
        params.nitrite = $('#wp-nitrite').val();
        params.nitrate = $('#wp-nitrate').val();
        params.magnesium = $('#wp-magnesium').val();
        params.calcium = $('#wp-calcium').val();
        params.alcalinity = $('#wp-alcalinity').val();
        params.ph = $('#wp-ph').val();
        params._token = $("input[name='_token']").val();

        $.ajax({
            url:'/water-parameters/submit',
            type:"POST",
            data: JSON.stringify(params),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(data){console.log(data);},
            failure: function(errMsg) {
                alert(errMsg);
            }
        })
    });
});