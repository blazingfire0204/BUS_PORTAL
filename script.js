const container=document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count=document.getElementById("count");
const total=document.getElementById("total");
const busSelect=document.getElementById("bus");

populateUI();

let ticketPrice=+busSelect.value;

function setBusData(busIndex,busPrice){
    localStorage.setItem("selectedBusIndex",busIndex);
    localStorage.setItem("selectBusPrice",busPrice);
} 

function updateSelectedCount(){
    const selectedSeats=document.querySelectorAll(".row .seat.selected");

    const seatsIndex=[...selectedSeats].map(function(seat){
        return[...seats].indexOf(seat);
    });
    localStorage.setItem('selectedSeats',JSON.stringify(seatsIndex));
    const selectedSeatsCount=selectedSeats.length;
    count.innerText=selectedSeatsCount;
    total.innerText=selectedSeatsCount*ticketPrice;
}
function populateUI(){
    const selectedSeats=JSON.parse(localStorage.getItem("selectedSeats"));
    if(selectedSeats!== null && selectedSeats.length > 0){
        seats.forEach((seat,index)=>{
            if(selectedSeats.indexOf(index)>-1){
        seat.classList.add("selected");
    }
});
}
const selectedBusIndex=localStorage.getItem('selectedBusIndex');
if(selectedBusIndex!=null){
    busSelect.selectedIndex=selectedBusIndex;
}
}
busSelect.addEventListener("change",e =>{
    ticketPrice=+e.target.value;
    setBusData(e.target.selectedIndex,e.target.value);
    updateSelectedCount();
});

container.addEventListener("click",(e)=>{
    if(e.target.classList.contains("seat")&& !e.target.classList.contains("sold")){
    e.target.classList.toggle("selected");
}
updateSelectedCount();
});
updateSelectedCount();
