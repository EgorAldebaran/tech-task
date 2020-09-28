$(document).ready(function() {
    $("#go").click(function(e) {

        e.preventDefault()

        let name = $("#name").val()
        let surname = $("#surname").val()
        let lastname = $("#lastname").val()
        let sex = $("#sex").val()
        let wage = $("#wage").val()
        let team = $("#team").val()

        $.ajax(
            {
                type:"POST",
                url:"model.php",
                dataType:"text",
                data: {
                    name:name,
                    surname:surname,
                    lastname:lastname,
                    sex:sex,
                    wage:wage,
                    team:team
                },
                success:function(data) {
                    console.log("success")
                    console.log(data)
                },
                error:function() {
                    console.log("error big mistake")
                }
            }
        )
    })
})

$(document).ready(function() {
    $.post("fetch_all.php", function(data) {
        $("#result").html(data)
    })
})
