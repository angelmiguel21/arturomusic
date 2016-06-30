// llenar tablas de enlaces
$(document).ready(function(){
    $("#acorde").load("../conect/down.php?cmd=acorde_admin");
    $("#tablatura").load("../conect/down.php?cmd=tablatura_admin");
    $("#guitarpro").load("../conect/down.php?cmd=guitarpro_admin");
    $("#cover").load("../conect/down.php?cmd=cover_admin");
    $("#software").load("../conect/down.php?cmd=software_admin");

});

$(document).ready(function(){
    $("#submit").click(function(){
        var name = $("#name").val();
        var cat = $("#cat").val();
        var url = $("#url").val();

        var varData = 'name=' + name + '&cat=' + cat + '&url=' + url;

        console.log(varData);

        $.ajax({
            url: '../conect/downreg.php',
            type: 'POST',
            data: varData,
            success: function(){
                $("#acorde").load("../conect/down.php?cmd=acorde_admin");
                $("#tablatura").load("../conect/down.php?cmd=tablatura_admin");
                $("#guitarpro").load("../conect/down.php?cmd=guitarpro_admin");
                $("#cover").load("../conect/down.php?cmd=cover_admin");
                $("#software").load("../conect/down.php?cmd=software_admin");
            }
        })


    });

});