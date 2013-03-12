<!--Code Shobhit Garg-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
function jsonFormat(){

    var contact = new Object();
    contact.firstname = "Jesper";
    contact.surname = "Aaberg";
    contact.phone = ["555-0100", "555-0120"];

    var memberfilter = new Array();
        memberfilter[0] = "surname";
    memberfilter[1] = "phone";
    var jsonText = JSON.stringify(contact,memberfilter);
    var url="manipulate.php";
     $.ajax({
                    url: url,
                    type: 'post',
                    cache: false,
                    data: {jsonData:jsonText},
                    dataType: 'json',
                    success: function(json) {
                       alert(" response :"+ json);
                        alert(json['phone']);
                        alert(json['surname']);
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                            alert(errorThrown+"error :"+XMLHttpRequest.responseText);
                    }

                });

}
</script>
<input type="button" value="Click Me" onclick="jsonFormat();" />
