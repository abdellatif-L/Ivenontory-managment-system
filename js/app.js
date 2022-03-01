let months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; 
let data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]; // the data of each month

//data for circle chart
let categories = ['Mobile', 'Laptops', 'Mouse', 'Keyboard', 'EarPhone']; 
let dataCategories = [12, 5, 19, 10, 8];

let mainContent = document.querySelector(".content");

//add active class to the content on mouse over
function mouseEnter(){
    mainContent.classList.add("active");
}

//remove the active class to the content on mouse out
function mouseOut(){
    mainContent.classList.remove("active");
}

//For bar chart

const chart = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(chart, {
    type: 'bar',
    data: {
        labels: months,
        datasets: [{
            label: 'Earnings',
            data: data,
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Number of sales'
            }
        }
    }
});

//For bar chart

const circleChart = document.getElementById('myChart-circle').getContext('2d');
const myCircleChart = new Chart(circleChart, {
    type: 'polarArea',
    data: {
        labels: categories,
        datasets: [{
            label: 'Products',
            data: dataCategories,
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Product total'
            }
        }
    }
});

// For make links active

// Get the container element
var linksContainer = document.querySelector(".navbar-nav");

// Get all buttons inside the container
var btns = linksContainer.getElementsByClassName("nav-link");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active-link");
        current[0].className = current[0].className.replace(" active-link", "");
        this.className += " active-link";
  });
}