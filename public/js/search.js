const searchStartCity = document.querySelector('input[placeholder="Wpisz miasto startowe"]');
const rideContainer = document.querySelector('.tables');


searchStartCity.addEventListener("keyup", function (event){
    if(event.key === "Enter"){
        event.preventDefault();

        const data = {searchStartCity: this.value};

        fetch("/search", {
            method: "POST",
            headers:{
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response){
            return response.json();
        }).then(function (rides){
           rideContainer.innerHTML = " ";
           createHeader();
           loadRides(rides)
        });
    }
});

function loadRides(rides) {
    rides.forEach(ride => {
        console.log(ride);
        createRide(ride);
    });
}

function createHeader(){
    const headerTemplate = document.querySelector('#header-template');
    const header = headerTemplate.content.cloneNode(true);

    const headerStartCity = header.querySelector('#header_start_city');
    headerStartCity.innerHTML = "Miasto wyjazdu";

    const headerDestination = header.querySelector('#header_destination');
    headerDestination.innerHTML = "Miasto docelowe";

    const headerDate = header.querySelector('#header_date');
    headerDate.innerHTML = "Data przejazdu";

    const headerPackages = header.querySelector('#header_package_size');
    headerPackages.innerHTML = "Akceptowane rozmiary przesyłek";

    const headeraddedBy = header.querySelector('#header_added_by');
    headeraddedBy.innerHTML = "Użytkownik realizujący przejazd";

    rideContainer.appendChild(header);
}

function createRide(ride){
    const template = document.querySelector('#ride-template');
    const clone = template.content.cloneNode(true);

    const start_city = clone.querySelector("#start_city");
    start_city.innerHTML = ride.start_city;

    const destination = clone.querySelector('#destination');
    destination.innerHTML = ride.destination;

    const date = clone.querySelector('#date');
    date.innerHTML = ride.date;

    const package_size = clone.querySelector('#package_size');
    package_size.innerHTML = ride.accepted_package_sizes;

    const added_by = clone.querySelector('#added_by');
    added_by.innerHTML = ride.id_added_by;

    rideContainer.appendChild(clone);
}
