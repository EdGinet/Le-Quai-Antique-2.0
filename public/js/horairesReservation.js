let hours = {
    lunch: ["12:00", "12:15", "12:30", "12:45", "13:00", "13:15", "13:30"],
    dinner: ["19:00", "19:15", "19:30", "19:45", "20:00", "20:15", "20:30", "20:45", "21:00"]
};

let service = $('#service').val();

function updateHours() {
    let hoursAvailable = hours[service];
    let selectHour = $('#hour');

    selectHour.empty();

    $.each(hoursAvailable, function (index, hour) {
        let option = $('<option></option>').val(hour).text(hour).attr('data-available', 'true');
        selectHour.append(option);
    });
}

$('#service').on('change', function () {
    service = $('#service').val();
    updateHours();
});

updateHours();

$('#date').on('change', function () {
    let selectedDate = new Date($(this).val());
    let dayOfWeek = selectedDate.getDay();

    if (service === 'lunch' && !(dayOfWeek === 0 || dayOfWeek === 6)) {
        alert("Le restaurant ouvre ses portes au déjeuner uniquement le samedi et dimanche de 12h00 à 14h30.");
        $(this).val('');
    }
});
