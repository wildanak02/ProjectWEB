function addEvent() {
    // get values
    var eventName = $("#eventName").val();
    var organizer = $("#organizer").val();
    var date = $("#date").val();
    var location = $("#location").val();
    var description = $("#description").val();
    var image = $("#image").val();


    // Add record
    $.post("?controller=AdminPanel&action=tambahEvent", {
        eventName: eventName,
        organizer: organizer,
        date: date,
        location: location,
        description: description,
        image: image

    }, function (data, status) {
        // close the popup
        $("#addEvent").modal("hide");

        // clear fields from the popup
        $("#eventName").val("");
        $("#organizer").val("");
        $("#date").val("");
        $("#location").val("");
        $("#description").val("");
        $("#image").val("");
    });
}
