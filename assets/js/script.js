$(document).ready(function() {
    $("#filenamecontainer1").hide();
    $("#filenamecontainer2").hide();

    $("#uploadform1").change(function() {
        $("#uploadform1").hide();
        $("#filenamecontainer1").show();
        $("#filename1").text($("[name=userfileplan]").val().split('\\').pop());
    });
    $("#uploadform2").change(function() {
        $("#uploadform2").hide();
        $("#filenamecontainer2").show();
        $("#filename2").text($("[name=userfileform]").val().split('\\').pop());
    });
    $("#delete1").click(function() {
        $("[name=userfileplan]").val('');
        $("#filenamecontainer1").hide();
        $("#uploadform1").show();
    });
    $("#delete2").click(function() {
        $("[name=userfileform]").val('');
        $("#filenamecontainer2").hide();
        $("#uploadform2").show();
    });
});