//Testimonials Start
//reviews
const reviews = [
    {
        id: 1,
        name: 'Tara Mugford-Wilson',
        text: 'Sharon has a talent for understanding her clients\' needs and guiding them through the creative process and design experience to achieve complete satisfaction and beautiful spaces.',
    },
    {
        id: 2,
        name: 'Kristi Gunster',
        text: 'I was always impressed with Sharon\'s quick response time and good communications skills. I felt very comfortable knowing she was managing a team of vendors and contractors to meet and exceed our needs',
    },
    {
        id: 3,
        name: 'Melissa Parente',
        text: 'Sharon was able to take a very blank slate and develop beautiful and creative ideas for our consideration. She gave us the space and ability to make educated decisions and create a space that worked for us, both functionally and aesthetically.',
    },
    {
        id: 4,
        name: 'Rick Malcolm, AIA CAM Architect',
        text: 'Sharon Lehman is a talented interior designer, friendly relationship, listens to clients needs and has fantastic ideas. I have worked with Sharon on multiple projects, one of them as AIA Award winning and Wilkes-Barre Chamber of Commerce Pride of Place project but all of them were a great success. I would and have highly recommended her services.  We look forward to a continued partnership with Sharon Lehman Designs.',
    }
];

//select items
const author = document.getElementById("quote-name");
const info = document.getElementById("quote-text");

const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");

//set starting item
let currentItem = 0;

// load initial item
window.addEventListener("DOMContentLoaded", function() {
    const item = reviews[currentItem];
    author.textContent = item.name;
    info.textContent = item.text;
});

// show person based on item
function showPerson(person) {
    const item = reviews [person];
    author.textContent = item.name;
    info.textContent = item.text;
}

// show next person
nextBtn.addEventListener("click", function(){
    currentItem++;
    if (currentItem > reviews.length -1) {
        currentItem = 0; 
    }
    showPerson(currentItem);
});

//show prev person 
prevBtn.addEventListener('click', function(){
    currentItem--;
    if (currentItem < 0) {
        currentItem = reviews.length - 1;
    }
    showPerson(currentItem);
});
//Testimonials End

//Navigation Start
const navToggle = document.querySelector(".nav-toggle");
const links = document.querySelector(".links");

navToggle.addEventListener("click", function () {
    links.classList.toggle("show-links");
});

//Navigation End