window.onload = function () {
  displayClock();
  displayDate();
};

function displayClock() {
  var display = new Date().toLocaleTimeString();
  document.getElementById("time").innerHTML = display;
  setTimeout(displayClock, 1000);
}

function displayDate() {
  var d = new Date();
  var weekday = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  var monthname = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ];

  var dateString =
    weekday[d.getDay()] +
    ", " +
    d.getDate() +
    " " +
    monthname[d.getMonth()] +
    " " +
    d.getFullYear();

  document.getElementById("date").innerHTML = dateString;
}
