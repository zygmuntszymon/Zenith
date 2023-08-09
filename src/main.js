console.log('Observer looking for...')

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
})
const project_boxes_hidden = document.querySelectorAll('.hidden');
const hidden_heading = document.querySelectorAll('.hidden-heading');

project_boxes_hidden.forEach((el) => observer.observe(el));
hidden_heading.forEach((el) => observer.observe(el));

// F&Q

const faqs = document.getElementsByClassName('question');

Array.from(faqs).forEach((el) => {
    el.addEventListener('click', () => {
        showAnswer(el)
    })
});

function showAnswer(el) {
    Array.from(faqs).forEach((e) => {
        if (e.children[1].classList.contains('show-answer')) {
            e.children[1].classList.remove('show-answer')
        }
    });
    console.log(el.children[1].classList.toggle('show-answer'))

}

